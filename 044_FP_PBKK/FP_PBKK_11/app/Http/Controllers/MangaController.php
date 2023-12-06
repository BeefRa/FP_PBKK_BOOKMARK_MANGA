<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MangaController extends Controller
{
    public function index()
    {
        $mangaList = DB::table('manga_list')->get();

        return view('landing', ['mangaList' => $mangaList]);
    }
}