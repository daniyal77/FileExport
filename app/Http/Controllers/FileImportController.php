<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRequest;

class FileImportController extends Controller
{
    public function index (SaveRequest $request)
    {
        $file = $request->file;
        $format = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $format = ucwords($format);
        $className = "App\\Exporter\\{$format}Exporter";
        if (class_exists($className)) {
            $exporter = new $className();
            $renderFile = $exporter->render($file->getPathname());
            $fileContent = $exporter->parser($renderFile);
            dd($fileContent);
        }
    }
}
