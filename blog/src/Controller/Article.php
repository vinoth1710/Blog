<?php
/**
 * Created by PhpStorm.
 * User: Vinoth Ravindran
 * Date: 11/02/2019
 * Time: 11:29
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class Article
{
    /**
     *@Route("/Article/{page}")
     */
public function readarticle($page){

    return new Response("Bienvenue sur mon article : $page");
}
}