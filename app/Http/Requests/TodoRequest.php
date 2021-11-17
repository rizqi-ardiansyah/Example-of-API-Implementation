<?php

namespace App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\ApiRequest;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->method() == Request::METHOD_POST)
            return true;
        $todo = $this->route('todo');
        return auth()->user()->id = $todo->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'todo' => 'required|string|max:255',
            'label' => 'nullable|string',
            'done' => 'nullable|boolean',
        ];
    }
}
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      *
//      * @return bool
//      */
//     public function authorize()
//     {
//         return false;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array
//      */
//     public function rules()
//     {
//         return [
//             //
//         ];
//     }
// }

