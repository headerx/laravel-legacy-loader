<?php

namespace HeaderX\LegacyLoader\Tests;

class HelloWorldTest extends TestCase
{
    public function it_echoes_hello_world()
    {
        // $this->withoutExceptionHandling();
        $response = $this->get(config('legacy-loader.route_prefix').'/hello_world.php');

        $response->assertOk();
    }
}
