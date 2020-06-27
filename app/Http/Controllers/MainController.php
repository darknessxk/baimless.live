<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    private function fetchList(): string
    {
        $contentList = "{}";
        if (Storage::exists('list.json')) {
            $contentList = Storage::get("list.json");
        }

        return $contentList;
    }

    public function index() {
        $contentList = json_decode($this->fetchList(), true);

        $quotes = "{}";
        if (Storage::exists('quotes.json')) {
            $quotes = Storage::get("quotes.json");
        }

        $quotes = json_decode($quotes, true);

        return view("home/welcome", compact('contentList', 'quotes'));
    }

    public function contentList() {
        $contentList = json_decode($this->fetchList(), true)['list'];

        return view("home/list", [
            'list' => $contentList
        ]);
    }

    public function injMethods() {
        $contentList = json_decode($this->fetchList(), true)['injection'];

        return view("home/list", [
            'list' => $contentList
        ]);
    }

    public function prints() {
        $printList = json_decode($this->fetchList(), true)['prints'];
        $contentList = [];
        $disk = Storage::disk("publicImages");

        foreach ($printList as $key => $value) {
            $contentList[$key] = [];

            foreach($value as $print) {
                $hashedName = hash("sha256", $print) . "." . substr($print, strrpos($print, '.') + 1);
                $path       = sprintf("%s__%s", $key, $hashedName);

                if (!$disk->exists($path)) {
                    $content = file_get_contents($print);
                    $disk->put($path, $content);
                }

                $contentList[$key][] = $disk->url($path);
            }
        }

        return view("home/prints", [
            'list' => $contentList
        ]);
    }
}
