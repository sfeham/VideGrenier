<?php
use PHPUnit\Framework\TestCase;

class indexTest extends TestCase
{
    /** @test */
    public function testRouterAdd()
    {
        // crée router et lui rajoute une route (vendor/bin/phpunit Test)
        $router = new Core\Router();
        $router->add('', ['controller' => 'Home', 'action' => 'index']);

        
            $router->dispatch('');
    
        
               
            
        
        
        $this->assertGreaterThan(0, 1);
    }
}