<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use App\Actions\Task\CreateTask;

class AddTaskModal extends Component
{
    public $showModal = false;
    public $userId;
    public $title;
    public $description;


    public function render()
    {
        return view('livewire.modals.add-task-modal');
    }

    public function open($userId = null)
    {
        $this->userId = $userId;
        $this->showModal = true;
        $this->resetValidation();
    }

    public function close()
    {
        $this->showModal = false;
        $this->reset();
    }

    public function create(CreateTask $task)
    {

        $task->create([
            'user_id' => $this->userId,
            'title' => $this->title,
            'description' => $this->description
        ]);

        $this->emitTo('user.user-card', 'refreshComponent');
    }
}
