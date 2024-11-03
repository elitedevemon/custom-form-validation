<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NameUpperCase implements ValidationRule
{
  /**
   * Run the validation rule.
   *
   * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
   */
  public function validate(string $attribute, mixed $value, Closure $fail): void
  {
    //create a custom validation rule for uppercase name
    if (strtoupper($value) !== $value) {
      $fail(":attribute must be uppercase");
    }
  }
}