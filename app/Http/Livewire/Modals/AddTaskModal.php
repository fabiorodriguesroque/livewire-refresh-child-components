<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use App\Actions\Task\CreateTask;

class AddTaskModal extends Component
{
    public $showModal = false;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.modals.add-task-modal');
    }

    public function open($user_id) 
    {
        $this->showModal = true;
    }

    public function close()
    {
        $this->showModal = false;
        $this->reset();
    }

    public function create()
    {
        // create task
    }
}
