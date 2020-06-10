<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index() {
        return view("welcome");
    }

    public function content($id) {
        return view("content");
    }

    public function contentList() {
        $contentList = "{}";
        if (Storage::exists('list.json')) {
            $contentList = Storage::get("list.json");
        }

        $contentList = str_replace("\n", "", $contentList);

        return view('list', [
            'list' => json_decode($contentList, true)
        ]);
    }
}
