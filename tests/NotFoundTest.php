<?php

namespace HeaderX\LegacyLoader\Tests;

class NotFoundTest extends TestCase
{
    public function it_returns_not_found_when_there_is_no_matching_file()
    {
        // $this->withoutExceptionHandling();

        $response = $this->get(config('legacy-loader.route_prefix').'/notarealfile.php');

        $response->assertNotFound();
    }
}
