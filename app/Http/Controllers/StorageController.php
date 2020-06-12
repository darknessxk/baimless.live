<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function images($filename) {
        $filePath = storage_path('app/public/images/') . $filename;
        $disk = Storage::disk('publicImages');

        if (!$disk->exists($filename)) {
            abort(404);
        }

        return response()->file($filePath);
    }

    public function storage($filename) {
        $disk = Storage::disk('publicStorage');

        if ($disk->exists($filename)) {
            return response()->download($disk->get($filename));
        }
    }
}
