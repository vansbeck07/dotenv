<?php

namespace vansbeck07\Dotenv;

class SpecialValue
{
    protected $valueTypes = ['Bool', 'Null'];

    public function confirm($value)
    {
        foreach ($this->valueTypes as $type) {
            if ($this->{'is'.$type}($value)) {
                return true;
            }
        }

        return false;
    }

    public function convert($value)
    {
        foreach ($this->valueTypes as $type) {
            if ($this->{'is'.$type}($value)) {
                return $this->{'convertTo'.$type}($value);
            }
        }

        return $value;
    }

    public function reverse($value)
    {
        foreach ($this->valueTypes as $type) {
            if ($this->{'is'.$type}($value)) {
                return $this->{'reverse'.$type}($value);
            }
        }

        return $value;
    }

    public function isBool($value)
    {
        if (is_bool($value)) {
            return true;
        }

        if (!is_string($value)) {
            return false;
        }

        $lower = strtolower($value);

        return $lower === 'true' || $lower === 'false';
    }

    public function convertToBool($value)
    {
        if (is_bool($value)) {
            return $value;
        }

        if (!is_string($value)) {
            return false;
        }

        return strtolower($value) === 'true';
    }

    public function reverseBool($value)
    {
        if (is_bool($value)) {
            return $value === false ? 'false' : 'true';
        }

        if (!is_string($value)) {
            return 'false';
        }

        return strtolower($value) === 'true' ? 'true' : 'false';
    }

    public function isNull($value)
    {
        if (is_null($value)) {
            return true;
        }

        if (!is_string($value)) {
            return false;
        }

        return strtolower($value) === 'null';
    }

    public function convertToNull($value)
    {
        return null;
    }

    public function reverseNull($value)
    {
        return null;
    }
}
