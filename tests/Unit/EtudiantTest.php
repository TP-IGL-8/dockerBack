<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EtudiantTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCree()
    {
        $request=['nom'=>'user','prenom'=>'usename','email'=>'user@gmail.com','password'=>'motdepasse','moy'=>'12','mat'=>'143','grp'=>'3','annee'=>'1cp'];
        $response = $this->call('GET', 'cree',$request);
        $response->assertStatus(200);



        //$this->assertTrue(true);
    }
    public function testShowData()
	{
    $this->Etudiant([
        'nom'=>'user','prenom'=>'usename','email'=>'user@gmail.com','password'=>'motdepasse','moy'=>'12','mat'=>'143','grp'=>'3','annee'=>'1cp'
    ]);

    // act
    $response = $this->json('GET', '/api/etuapi/1');

    // assert
    $response   ->assertStatus(200)
                ->assertJsonStructure([
                    // ??
                    'nom',
                    'prenom',
                    'email',
                    'password',
                    'moy',
                    'mat',
                    'grp',
                    'annee'
                ]);
}


}