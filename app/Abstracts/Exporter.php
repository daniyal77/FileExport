<?php

namespace App\Abstracts;

abstract class Exporter
{
    protected $format;
    protected $data;

    public function __construct ($data)
    {
        $this->data = $data;
        if (!$this->is_valid()) {
            echo "Invalid Data!";
            exit();
        }
    }

    public function is_valid (): bool
    {
        foreach ($this->data as $field) {
            if (empty($field)) {
                return false;
            }
        }
        return true;
    }

    abstract function render ();

    abstract function export ();
}
