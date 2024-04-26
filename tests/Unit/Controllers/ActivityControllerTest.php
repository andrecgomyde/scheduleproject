<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Http\Controllers\ActivityController;

class ActivityControllerTest extends TestCase
{
    public function test_store_valid_activity()
    {
        $controller = new ActivityController;

        $request = new Request([
            'title' => 'Título da atividade',
            'start_date' => '2024-04-26',
            'due_date' => '2024-05-10',
            'status' => 'aberto',
            'user_id' => 1
        ]);

        $userExists = true; 

        if (!$userExists) {
            $this->markTestSkipped('User does not exist'); 
        }

        $response = $controller->store($request);

        $this->assertEquals(201, $response->status());

        $this->assertNotEmpty($response->getContent());
    }
}
