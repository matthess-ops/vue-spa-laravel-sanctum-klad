<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;




use Illuminate\Http\Request;


// require "vendor/autoload.php";
use PHPHtmlParser\Dom;


class GuzzleController extends Controller
{
    public function testguzzle(){

        // $dom = new Dom;
        // $dom->loadFromUrl('https://www.goodreads.com/book/show/33257757-iron-gold');
        // $html = $dom->outerHtml;
        // echo $html;

        $dom = new Dom;
        $dom->loadFromUrl('https://www.goodreads.com/book/show/33257757-iron-gold');
        $img = $dom->find('#coverImage');

        
        
        // $metacol = $dom->find('#metacol');
        // $description= $metacol->find('#description');
        // $fullDescription = $description->find('span');
        // error_log(count($fullDescription));
        // error_log($fullDescription[0]);
        // echo strip_tags($fullDescription[1]->innerHtml);

        
        // echo $description;
        // echo $fullDescription; // "foo"
    
    }
}
