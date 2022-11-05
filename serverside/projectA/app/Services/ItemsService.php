<?php

/**
* itemテーブルのサービスクラス
* 
* @author kogure
*  
*/

namespace App\Services;

use App\Http\Requests\ItemsPostRequest;
use App\Models\Items;
use Illuminate\Http\Exceptions\HttpResponseException;

class ItemsService
{
    /**
     * itemsテーブルへのインサート処理を呼び出し、実行結果を返却する
     * 
     * @param ItemsPostRequest $request リクエスト
     * @return array レスポンスjson
     */
    public function store(ItemsPostRequest $request) {
        try {
            $this->insert($request->name, $request->price);
        } catch (\Exception $e) {
            $resultJsonArray = [
                'message' => 'server side error.',
                'errors' => $e,
            ];
            throw new HttpResponseException(response()->json($resultJsonArray, 500));
        }
        return ['message' => 'items record created.'];
    }

    /**
     * itemsテーブルへのインサート処理
     * 
     * @param string $name 品名
     * @param int $price 値段
     */
    private function insert($name, $price) {
        \DB::beginTransaction();
        try {
            $items = new Items;
            $items->name  = $name;
            $items->price = $price;
            $items->save();
        } catch (\Exception $e) {
            \DB::rollback();
            \Log::error($e);
            throw $e;
        }
        \DB::commit();
    }
}