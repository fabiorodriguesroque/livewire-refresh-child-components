<?php

namespace App\Actions\Task;

use App\Models\Task;
use Illuminate\Support\Facades\Validator;

class CreateTask {

    /**
     * Create task to an user
     */
    public function create(array $input): Task
    {
        Validator::make($input, [
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ])->validate();

        return Task::create([
            'user_id' => $input['user_id'],
            'title' => $input['title'],
            'description' => $input['description']
        ]);

    }
}
