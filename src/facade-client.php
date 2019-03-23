<?php
namespace src;
use src\Lib\Facade\Post;
use src\Lib\Facade\PostFacade;

require __DIR__."/../vendor/autoload.php";

$post = new Post(101);
$postFacade = new PostFacade();
$postFacade->update($post);
