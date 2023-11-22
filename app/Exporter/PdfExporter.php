<?php

namespace App\Exporter;

use App\Abstracts\Exporter;
use Illuminate\Support\Facades\Storage;

class PdfExporter extends Exporter
{

    function is_valid ()
    {
        // TODO: Implement is_valid() method.
    }

    function render ($path)
    {
        // TODO: Implement render() method.
    }

    function parser ($content)
    {
        return json_decode($content, true);
    }
}
