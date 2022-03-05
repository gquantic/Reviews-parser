<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DiDom\Document;
use PhpParser\Comment\Doc;

class ParserController extends Controller
{
    public function __construct($url)
    {
        $this->document = new Document($url);
        return $this->document;
    }

    public function text($child)
    {
//        echo json_decode(var_dump($this->document->find($child)));
        echo json_decode(var_dump($this->document));
    }
}
