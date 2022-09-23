<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;



class ScraperController extends Controller
{
    public function index()
{
    $client = new Client();


    for ($i=1; $i < 8 ; $i++) { 
      $website = $client->request('GET', 'https://www.yellowpages.om/yp/search?q=&page='.$i);
      $companies = $website->filter('.col-7')->each(function ($node) { 
        $linkelement =  $node->filter('a')->text();
        $client2 = new Client();
    
        $link = $node->selectLink($linkelement)->link();
         $crawler = $client2->click($link);
    
        return [
      'link' => $node->filter('a')->attr('href'),
      'name' => $node->filter('a h4')->html(),
      'email'=> $crawler->filter('.catdisplay')->eq(1)->filter('a')->text(),
      // 'outerHTML' => $node->outerHtml()
        ];

    });
    
    dd($companies);
    
    }




}
}
