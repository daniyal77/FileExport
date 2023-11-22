<?php

namespace App\Exporter;

use App\Abstracts\Exporter;

class JsonExporter extends Exporter
{


    function is_valid ()
    {
        // TODO: Implement is_valid() method.
    }

    function render ($path): bool|string
    {
        return file_get_contents($path);
    }

    function parser ($content): mixed
    {
        return json_decode($content, true);
    }
}
