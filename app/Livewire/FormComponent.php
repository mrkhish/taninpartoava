<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\contactus;
class FormComponent extends Component
{
    public $fname;
    public $lname;
    public $tel;
    public $message;
    public $successMessage;
    public $errorMessage;
   
     public function save()
    {
        $this->validate([
          'fname'=>'required|string|max:255',
          'lname'=>'required|string|max:255',
          'tel'=>'required|numeric|max:12',
          'message'=>'string|max:255',
        ]);
        Post::create([
           
         'fname' => $this->fname,
       'lname' => $this->lname,
        'tell' => $this->tel,
        'message' => $this->message
        ]);
        $successMessage = $this->successMessage = 'submitted successfully';
        $errorMessage = $this->errorMessage = 'submission failed';
        $this->reset(['fname','lname','tel','message']);
        session()->flash('status', 'Post successfully updated.');
        $this->redirect('/contactus');
    }
 
    public function render()
    {
        return view('livewire.form-component');
    }
  
  
}
