<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ParserController;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->url)
            $parser = new ParserController($request->url);

        echo $request->name;

        echo $parser->text('p');
    }
}
