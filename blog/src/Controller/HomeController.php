<?php
/**
 * Created by PhpStorm.
 * User: Vinoth Ravindran
 * Date: 11/02/2019
 * Time: 10:32
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     *@Route("/")
    */
public function homepage(){
    return new Response("Bonjour");
}

}