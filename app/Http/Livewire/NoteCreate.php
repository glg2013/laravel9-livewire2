<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class NoteCreate extends Component
{
    public $content;

    protected $rules = [
        'content' => 'required|min:3|string|max:255',
    ];

    public function createNote() {
        if (auth()->guest()) {
            return redirect()->route('login');
        }

        $this->validate();

//        $validator = Validator::make(['content' => $this->content], $this->rules);
//
//        if ($validator->fails()) {
//            // 处理验证失败的情况
//            //return redirect()->back()->withErrors($validator->errors())->withInput();
//
//            /*
//            "验证失败了。。。。" // app/Http/Livewire/NoteCreate.php:28
//
//            array:1 [▼ // app/Http/Livewire/NoteCreate.php:28
//              "content" => array:1 [▼
//                0 => "The content must be at least 3 characters."
//              ]
//            ]
//            */
//
//            //dd('验证失败了。。。。', $validator->errors()->getMessages() );
////            foreach ($validator->errors()->getMessages() as $field => $message) {
////                $this->addError($field, $message[0]);
////            }
//
////            dd('已经存储好了错误，看一下', $this->getErrorBag());
//            $this->emit('createNoteValidationError', $this->getErrorBag());
//        }

        auth()->user()->notes()->create([
            'content' => $this->content,
        ]);

        $this->content = '';

        $this->emit('noteCreated');
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
