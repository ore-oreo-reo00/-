<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['string', 'required', 'max:255'],
            'last_name' => ['string', 'required', 'max:255'],
            'gender' => ['required'],
            'email' => ['string', 'required', 'email', 'max:255'],
            'tel1' => ['required', 'max:5', 'regex:/^[0-9]+$/'],
            'tel2' => ['required', 'max:5', 'regex:/^[0-9]+$/'],
            'tel3' => ['required', 'max:5', 'regex:/^[0-9]+$/'],
            'address' => ['string', 'required', 'max:255'],
            'select' => ['required'],
            'content' => ['string','required','max:120'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '性を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel1.required' => '電話番号を入力してください',
            'tel1.digits_between:5' => '電話番号は5桁までの数字で入力してください',
            'tel2.required' => '電話番号を入力してください',
            'tel2.digits_between:5' => '電話番号は5桁までの数字で入力してください',
            'tel3.required' => '電話番号を入力してください',
            'tel3.digits_between:5' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'select.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせの内容を入力してください',
            'content.max:120' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
