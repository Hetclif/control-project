<?php

namespace App\Http\Requests\Timetable;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'weekday' => 'required|integer',
            'numerator' => 'required|integer',
            'lesson_number' => 'required|integer',
            'group_id' => 'required',
            'lesson_id' => 'required',
            'teacher_id' => 'required',
            'classroom_id' => 'required',
        ];
    }
}
