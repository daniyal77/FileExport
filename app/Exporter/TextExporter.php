<?php

namespace App\Exporter;

use App\Abstracts\Exporter;
use Illuminate\Support\Facades\Storage;

class TextExporter extends Exporter
{
    protected $format = '.txt';

    function export ()
    {
        $file_name = "text-file-" . rand(100, 999) . $this->format;
        Storage::disk('local')->put($file_name, $this->data['key'] . ":" . $this->data['value']);
        echo "$file_name successfully Created!";
        // TODO: Implement export() method.
    }

    function render ()
    {
        // TODO: Implement render() method.
    }
}
