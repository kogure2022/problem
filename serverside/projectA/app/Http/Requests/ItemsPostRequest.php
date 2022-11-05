<?php

/**
* itemテーブルのリクエストクラス
*
* HTTPリクエスト内容の検証を行う
* 
* @author kogure
*  
*/

namespace App\Http\Requests;

class ItemsPostRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 認証チェックは考慮しない
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:128',
            'price' => 'required|max:11|numeric'
        ];
    }
}
