<?php

namespace App\Http\Requests\554;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\554\Atletas;

class CreateAtletasRequest extends FormRequest
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
        return Atletas::$rules;
    }
}
