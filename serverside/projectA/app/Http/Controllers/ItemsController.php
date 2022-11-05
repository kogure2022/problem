<?php
/**
* itemテーブルのコントローラクラス
* 
* @author kogure
*  
*/

namespace App\Http\Controllers;

use App\Http\Requests\ItemsPostRequest;
use App\Services\ItemsService;

class ItemsController extends Controller
{
    /**
     * itemsテーブルへのインサート処理を行うAPIの窓口
     *
     * @param ItemsPostRequest $request リクエスト
     */
    public function createItems(ItemsPostRequest $request) {
        $itemsService = new ItemsService;
        $resultJsonArray = $itemsService->store($request);
        return response()->json($resultJsonArray, 201);
    }
}
