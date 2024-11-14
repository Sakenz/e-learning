<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;

class CreateCourseModal extends Component
{
    public $showModal = false;
    public $courseName;
    public $courseDescription;

    protected $rules = [
        'courseName' => 'required|string|max:128',
        'courseDescription' => 'required|string|max:500',
    ];

    public function createCourse()
    {
        $this->validate();

        Course::create([
            'name' => $this->courseName,
            'description' => $this->courseDescription,
        ]);

        $this->reset(['courseName', 'courseDescription', 'showModal']);


    }

    public function render()
    {
        return view('livewire.create-course-modal');
    }
}
