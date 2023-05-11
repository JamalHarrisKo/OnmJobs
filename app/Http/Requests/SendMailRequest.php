<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMailRequest extends FormRequest
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

            // 'jobapplication' => 'required',
            // 'phone' => 'required',
            // 'email' => 'required',
            // 'lastname' => 'required',
            // 'firstname' => 'required',
            // 'file' => 'required|mimes:pdf',
            // 'html_css' => 'required',
            // 'bonusText' => 'required',
            // 'php' => 'required',
            // 'mysql' => 'required',
            // 'js' => 'required',
            // 'frontendFrameworks' => 'required',
            // 'wordpress' => 'required',
            // 'typo3' => 'required',
            // // 'typo3f' => 'required'
        ];

        // if ($this->has('jobapplication')) {
        //     $rules = array_merge($rules, ['jobapplication' => 'required']);
        // };
        // if ($this->has('phone')) {
        //     $rules = array_merge($rules, ['phone' => 'required']);
        // };
        // if ($this->has('email')) {
        //     $rules = array_merge($rules, ['email' => 'required']);
        // };
        // if ($this->has('lastname')) {
        //     $rules = array_merge($rules, ['lastname' => 'required']);
        // };
        // if ($this->has('firstname')) {
        //     $rules = array_merge($rules, ['firstname' => 'required']);
        // };
        // if ($this->has('file')) {
        //     $rules = array_merge($rules, ['file' => 'required|mimes:pdf']);
        // };
        // if ($this->has('html_css')) {
        //     $rules = array_merge($rules, ['html_css' => 'required']);
        // };
        // if ($this->has('bonusText')) {
        //     // rule for testing
        //     $rules = array_merge($rules, ['bonusText' => 'required']);
        // };
        // if ($this->has('php')) {
        //     $rules = array_merge($rules, ['php' => 'required']);
        // };
        // if ($this->has('mysql')) {
        //     $rules = array_merge($rules, ['mysql' => 'required']);
        // };
        // if ($this->has('js')) {
        //     $rules = array_merge($rules, ['js' => 'required']);
        // };
        // if ($this->has('frontendFrameworks')) {
        //     $rules = array_merge($rules, ['frontendFrameworks' => 'required']);
        // };
        // if ($this->has('wordpress')) {
        //     $rules = array_merge($rules, ['wordpress' => 'required']);
        // };
        // if ($this->has('typo3')) {
        //     $rules = array_merge($rules, ['typo3' => 'required']);
        // };
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    
    {
        return [
            'firstname.required' => '"Vorname" ist ein Pflichfeld',
            'lastname.required' => '"Nachname" ist ein Pflichfeld',
            'email.required' => '"email" ist ein Pflichfeld',
            'phone.required' => '"Telefonnummer" ist ein Pflichfeld',
            'html_css.required' => '"HTML & CSS" ist ein Pflichfeld',
            'php.required' => '"PHP" ist ein Pflichfeld',
            'mysql.required' => '"MySQL" ist ein Pflichfeld',
            'js.required' => '"JavaScript" ist ein Pflichfeld',
            'frontendFrameworks.required' => '"Frontend-Frameworks" ist ein Pflichfeld',
            'wordpress.required' => '"Wordpress" ist ein Pflichfeld',
            'typo3.required' => '"Typo3" ist ein Pflichfeld',
            'file.required' => 'Bitte Dokumente zum Upload bereitstellen',
            'file.mimes' => 'Bitte Dokumente im PDF Format zum Upload bereitstellen',
        ];
    }
}
