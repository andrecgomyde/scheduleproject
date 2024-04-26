<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Activity;
use App\Models\User; 

class ActivityTest extends TestCase
{
    public function test_create_activity()
    {
        $user = User::factory()->create();

        $activityData = [
            'title' => 'Título da atividade',
            'start_date' => '2024-04-26',
            'due_date' => '2024-05-10',
            'status' => 'aberto',
            'user_id' => $user->id, 
        ];

        $activity = Activity::create($activityData);

        $this->assertInstanceOf(Activity::class, $activity);
        $this->assertEquals($activityData['title'], $activity->title);
        $this->assertEquals($activityData['start_date'], $activity->start_date);
        $this->assertEquals($activityData['due_date'], $activity->due_date);
        $this->assertEquals($activityData['status'], $activity->status);
        $this->assertEquals($activityData['user_id'], $activity->user_id);
    }

}
