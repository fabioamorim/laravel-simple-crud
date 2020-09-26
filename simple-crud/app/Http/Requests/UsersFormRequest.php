<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest 
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
           'name' => 'required|min:3',
           'cpf' => 'required|size:14|regex:/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/',
           'email' => 'required|email',
           'phone_number' => 'required|regex:/(^(\([0-9]{2}\))\s([9]{1})?([0-9]{4})-([0-9]{4})$)/'
       ];
   }

}