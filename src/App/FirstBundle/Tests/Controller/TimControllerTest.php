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

        $crawler = $client->request('GET', '/tims/barsa');

        $this->assertTrue
        ($crawler->filter('html:contains("trainer Luis Enrique stadium in Camp Nou captain Xavier ")')->count() > 0);
    }
}