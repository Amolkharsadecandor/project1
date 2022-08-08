<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use App\Models\Department;

class Uppercase implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        //
        // if (strtoupper($value) !== $value) {
        //     $fail('The :attribute must be uppercase.');
        // }
                    $dep = new Department;
                //  $dep->name = $request->name;
                    $deprt = Department::select("*")
                      ->where("name", "=",$dep->name)
                       ->get();

                       $deprnum= count($deprt);
                              
                        if($deprnum!=0)
                        {
                            echo "input val and table val match ! ";
                        }
                        else
                        {
                            echo "invalid input  val ";
                        }
        }
}
