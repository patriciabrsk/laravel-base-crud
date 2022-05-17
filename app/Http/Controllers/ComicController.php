<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        $comics = Comic::all();

        $data = [
            'comic' => new Comic(),
            'comics' => $comics
        ];
        return view('trains.index', $data);
    }

    public function show($id) {
        $comic = Comic::findOrFail($id);
        return view('comics.show', ['comic' => $comic]);
    }
}
