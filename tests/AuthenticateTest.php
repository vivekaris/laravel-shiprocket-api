<?php

namespace Seshac\Shiprocket\Tests;

use Seshac\Shiprocket\Tests\Traits\SampleData;
use Seshac\Shiprocket\Tests\Traits\Authenticate;

class ShiprocketTest extends TestCase
{
    use SampleData;
    use Authenticate;
    
    /** @test */
    public function can_able_to_get_a_token()
    {
        $token = $this->getToken();
        $this->assertNotNull($token);
    } 

  

}