<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\HomeController;
use PHPUnit\Framework\TestCase;

class HomeControllerTest extends TestCase
{
    public function test_should_run_correctly()
    {
        $this->assertEquals("Hello","Hello");
    }

    public function test_controller_index_should_return_array(){
        $controller = new HomeController();
        $this->assertEquals([
            "id"=>1,
            "page"=>"Home",
        ],$controller->index());
    }
}
