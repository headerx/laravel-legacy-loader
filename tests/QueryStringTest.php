<?php

namespace HeaderX\LegacyLoader\Tests;

class QueryStringTest extends TestCase
{
    /** @test */
    public function it_parses_the_query_string()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(config('legacy-loader.route_prefix').'/query_string.php?hello_world=Hello World');

        $response->assertSee('Hello World');
    }
}
