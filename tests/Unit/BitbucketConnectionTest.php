<?php

namespace Tests\Unit;

use GrahamCampbell\Bitbucket\Facades\Bitbucket;
use Tests\TestCase;

class BitbucketConnectionTest extends TestCase
{
    public function testThatBitbucketManagerCanConnect()
    {
        $this->assertNotEmpty(Bitbucket::currentUser()->show());
    }
}
