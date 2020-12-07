<?php
class Form
{
    private $data;

    public function __construct($data = array())
    {
        $this->data = $data;
    }

    public function create($method)
    {
        return '<form method="' . $method . '">';
    }

    private function getValue($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function input($type, $name)
    {
        return '<label for="' . $name . '">' . $name . '</label><input type="' . $type . '" name="' . $name . '"value="' . $this->getValue($name) . '">';
    }

    public function select($name, $values)
    {
        foreach ($values as $value) {
            $option .= '<option value="' . $value . '">' . $value . '</option>';
        }
        return '<select name="' . $name . '">' . $option . '</select>';
    }

    public function textarea($rows, $name)
    {
        return '<label for="' . $name . '">' . $name . '</label><textarea rows="' . $rows . '" name="' . $name . '"value="' . $this->getValue($name) . '"></textarea>';
    }

    public function checkInput($type, $name, $values)
    {
        foreach ($values as $value) {
            $box .= '<input type="' . $type . '" value="' . $value . '" name="' . $name . '"><label for="' . $name . '">' . $value . '</label>';
        }
        return $box;
    }

    public function submit()
    {
        echo '<button type="submit" name="submit">submit</button> </form>';
    }
}
