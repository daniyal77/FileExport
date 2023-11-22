<?php

namespace App\Abstracts;

abstract class Exporter
{

    abstract function is_valid ();

    abstract function render ($path);

    abstract function parser ($content);
}
