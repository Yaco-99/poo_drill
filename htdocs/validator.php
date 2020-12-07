<?php
class Validator
{
    public function bool($data)
    {
        if (filter_var($data, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) !== null) {
            return;
        } else {
            return "Not a boolean";
        }
    }

    public function email($data)
    {
        if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return;
        } else {
            return "Not an email";
        }
    }

    public function float($data)
    {
        if (filter_var($data, FILTER_VALIDATE_FLOAT)) {
            return;
        } else {
            return "Not a float";
        }
    }

    public function int($data)
    {
        if (filter_var($data, FILTER_VALIDATE_INT)) {
            return;
        } else {
            return "Not an int";
        }
    }

    public function regex($data, $pattern)
    {
        if (filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "$pattern")))) {
            return;
        } else {
            return "Incorrect expression";
        }
    }
}
