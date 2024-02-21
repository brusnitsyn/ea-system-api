<?php

namespace App\Traits;
use Illuminate\Support\Facades\DB;
use PDO;

trait HasFilters
{
    public function scopeFilter($query, $scopes = [])
    {
        if (!is_array($scopes))
            return $query;

        $likeOperator = $this->getLikeOperator();

        foreach ($this->traitsMethods(__FUNCTION__) as $method) {
            $this->$method($query, $scopes);
        }

        if (isset($scopes['search']))
            $query = $this->searchIn($scopes);

        unset($scopes['search']);

        if (isset($scopes['exceptIds'])) {
            $query->whereNotIn($this->getTable() . '.id', $scopes['exceptIds']);
            unset($scopes['exceptIds']);
        }

        foreach ($scopes as $column => $value) {

            if (method_exists($this, 'scope' . ucfirst($column))) {
                $query->$column();
            } else {
                $value = collect($value)
                    ->map(fn (string $value): array => explode(',', $value))
                    ->collapse()
                    ->toArray();

                if (is_array($value)) {
                    $query->whereIn($column, $value);
                } elseif ($column[0] == '%') {
                    $value && ($value[0] == '!') ? $query->where(substr($column, 1), "not $likeOperator", '%' . substr($value, 1) . '%') : $query->where(substr($column, 1), $likeOperator, '%' . $value . '%');
                } elseif (isset($value[0]) && $value[0] == '!') {
                    $query->where($column, '<>', substr($value, 1));
                } elseif ($value !== '') {
                    $query->where($column, $value);
                }
            }
        }

        return $query;
    }

    public function scopeSearchIn($query, &$scopes)
    {
        // Fields in model
        $scopeField = $this->searchField;
        $orFields = $this->searchInFields;

        if (isset($scopes[$scopeField]) && is_string($scopes[$scopeField])) {
            $query->where(function ($query) use (&$scopes, $scopeField, $orFields) {
                foreach ($orFields as $field) {
                    $query->orWhere($field, $this->getLikeOperator(), '%' . $scopes[$scopeField] . '%');
                }
            });
        }

        return $query;
    }

    protected function getLikeOperator(): string
    {
        if (DB::connection()->getPDO()->getAttribute(PDO::ATTR_DRIVER_NAME) === 'pgsql') {
            return 'ILIKE';
        }

        return 'LIKE';
    }

    protected function traitsMethods(string $method = null): array
    {
        $method = $method ?? debug_backtrace()[1]['function'];

        $traits = array_values(class_uses_recursive(get_called_class()));

        $uniqueTraits = array_unique(array_map('class_basename', $traits));

        $methods = array_map(function (string $trait) use ($method) {
            return $method . $trait;
        }, $uniqueTraits);

        return array_filter($methods, function (string $method) {
            return method_exists(get_called_class(), $method);
        });
    }
}
