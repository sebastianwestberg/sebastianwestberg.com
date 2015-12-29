<?php

namespace Tests\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blog');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('1', $crawler->filter('p')->text());
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blog/2015/02/test-slug');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('test-slug', $crawler->filter('h1')->text());
    }
}
