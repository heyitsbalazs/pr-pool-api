<?php

namespace Tests\Unit;

use GrahamCampbell\Bitbucket\Facades\Bitbucket;
use Tests\TestCase;

class UrlParserTest extends TestCase
{
    public function testThatUrlCanBe()
    {
        $this->assertNotEmpty(Bitbucket::currentUser()->show());
    }
}
