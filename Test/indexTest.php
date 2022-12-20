<?php
use PHPUnit\Framework\TestCase;

class indexTest extends TestCase
{
    /** @test */
    public function testRouterAdd()
    {
        $router = new Core\Router();
        $router->add('', ['controller' => 'Home', 'action' => 'index']);

        
            $router->dispatch('');
    
        
               
            
        
        
        $this->assertGreaterThan(0, 1);
    }
}