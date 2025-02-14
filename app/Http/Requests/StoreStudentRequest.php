<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'class' => 'required|integer|min:1|max:10',
            'mark' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'branch_id' => 'required|exists:branches,id',
        ];
    }

    /**
     * Custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please enter the student\'s name.',
            'name.string' => 'The name must be a valid string.',
            'name.max' => 'The name cannot exceed 255 characters.',
            'name.regex' => 'The name should only contain letters and spaces.',

            'class.required' => 'Please enter the class.',
            'class.integer' => 'The class must be a number.',
            'class.min' => 'Class must be at least 1.',
            'class.max' => 'Class cannot be more than 10.',

            'mark.required' => 'Please enter the student\'s mark.',
            'mark.integer' => 'Marks should be a number.',
            'mark.min' => 'Marks cannot be negative.',
            'mark.max' => 'Marks cannot exceed 100.',

            'bio.required' => 'Please write a bio for the student.',
            'bio.string' => 'The bio must be a valid text.',
            'bio.min' => 'The bio must be at least 20 characters long.',
            'bio.max' => 'The bio cannot be longer than 1000 characters.',

            'branch_id.required' => 'Please select a branch.',
            'branch_id.exists' => 'The selected branch does not exist.',
        ];
    }
}
