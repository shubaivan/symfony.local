<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 12.11.14
 * Time: 23:11
 */
namespace App\FirstBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TimControllerTest extends WebTestCase
{
    public function testTim()
    {
        $client = static::createClient();

        $crawlerb = $client->request('GET', '/tims/barsa');
//        $crawlerr = $client->request('GET', '/tims/real');


        $this->assertTrue
        ($crawlerb->filter('html:contains("trainer Luis Enrique stadium in Camp Nou captain Xavier ")')->count() > 0);
//        $this->assertTrue
//        ($crawlerr->filter('html:contains(" trainer Carlo Ancelotti stadium in Santiago Bernabeu captain Casillas Chempion  ")')->count() > 0);
    }

}