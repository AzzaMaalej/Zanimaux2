<?php

namespace ZanimauxBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RefugeControllerTest extends WebTestCase
{
    public function testRefuge()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/refuge');
    }

}
