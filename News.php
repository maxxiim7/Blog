<?php require "vendor/autoload.php";
use jcobhams\NewsApi\NewsApi;
$newsapi = new NewsApi("87907ca13d6847c9bc62aa5b088b8818"); //<-- added $client to the variables,maybe it doesnt work if added
$topheadlines = $newsapi->getTopHeadLines("World",null,null,null,5,null); // <--- change number to display more/less News on index

foreach($topheadlines->articles as $topheadline) {echo "<a href=$topheadline->url target='_blank'>"."<li>".  $topheadline->title ."<li>". "</a>" . "<br>";}
    