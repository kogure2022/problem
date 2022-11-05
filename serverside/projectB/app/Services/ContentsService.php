<?php

namespace App\Services;
use App\Models\Contents;
use Illuminate\Http\Request;
/**
* contentsサービスクラス
* 
* @author kogure
* 
*/
class ContentsService
{

    /**
     * contentsテーブルへインサートを行う
     * 
     * @param Request $request request
     */
    public function insert(Request $request)
    {
        \DB::beginTransaction();
        try {
            $input_content = new Contents();
            $input_content->content = $request['content'];
            $input_content->userid = $request->user()['id'];
            $input_content->save();
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            \Log::error($e);
            throw $e;
        }
    }

    /**
     * contentsテーブルへのセレクトを行う
     * 
     * @return array select結果
     */
    public function get()
    {
        try {
            $items = Contents::leftJoin('users', 'contents.userid', '=', 'users.id')
            ->select('users.name','content','contents.created_at')
            ->orderBy('contents.created_at', 'desc')
            ->paginate(5);
        } catch (\Exception $e) {
            \Log::error($e);
            throw $e;
        }
        return $items;
    }
}