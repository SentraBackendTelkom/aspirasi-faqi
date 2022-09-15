<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Aspirasi;


class FormAspirasi extends Component
{
    public $aspirasi;

    protected $rules = [
        'aspirasi.topic' => 'required|string|min:6',
        'aspirasi.description' => 'required|string|max:250',
        'aspirasi.location' => 'required|string|max:400',
        'aspirasi.sender_name' => 'required|string|max:100'
    ];

    public function mount()
    {
        $this->aspirasi = new Aspirasi();
    }

    public function render()
    {
        return view('livewire.form-aspirasi');
    }

    public function save()
    {
        $this->validate();
        $this->aspirasi->session_id = session('guest');
        $this->aspirasi->save();
    }
}
