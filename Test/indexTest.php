<?php
use PHPUnit\Framework\TestCase;

class indexTest extends TestCase
{
    /** @test */
    public function testPushAndPop()
    {
        $router = new Core\Router();
        $router->add('', ['controller' => 'Home', 'action' => 'index']);
        
        $this->assertGreaterThan(0, count($router->routes));
    }
}