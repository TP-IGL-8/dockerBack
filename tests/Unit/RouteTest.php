<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
///Test class for routes.

class RouteTest extends TestCase
{
    /**
     * This fonction tests all the web routes of the application.
     *
     * @return void
     */

       /**
     * @runInSeparateProcess
     */
    public function testExample()
    {  
        $response=$this->get('/etudiants');
        $response->assertStatus(200);

        //$response=$this->get('/cree');
        //$response->assertStatus(200); 

        $response=$this->get('etuapi/'.random_int(0,200));
        $response->assertStatus(200);
        
  
        
    }

    
}
