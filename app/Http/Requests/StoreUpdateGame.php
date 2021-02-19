<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateGame extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'description'=>'required',
            'cover'=> 'required|image',
            'img1' =>'required|image',
            'img2' =>'required|image',
            'img3' =>'required|image',
            'img4' =>'required|image',
            'file'=> 'required',
        ];
    }
}
