<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as FormHandleReqeust;
use Str;

class FormRequest extends FormHandleReqeust
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
      // validation rules
      'name' => 'required|min:4',
      'email' => 'required|email',
      'phone' => 'required|numeric',
      'password' => 'required'
    ];
  }

  public function messages()
  {
    return [
      'name.required' => ':attribute you have to fill must'
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'The name'
    ];
  }

  protected function prepareForValidation()
  {
    $this->merge([
      'name' => strtoupper($this->name)
    ]);
  }

  protected $stopOnFirstFailure = true;
}