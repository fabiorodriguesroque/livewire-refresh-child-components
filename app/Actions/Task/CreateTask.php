<?php 

namespace App\Actions\Task;

use App\Models\Task;

class CreateTask {

    /**
     * Create task to an user
     */
    public function create($user_id, $title, $description)
    {
        $task = Task::create([
            'user_id'     => $user_id,
            'title'       => $title,
            'description' => $description,
        ]);
    }
}