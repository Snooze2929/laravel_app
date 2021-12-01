<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //コメント情報を全て取得
        $messages = \App\Message::all();

        return view('home',['messages' => $messages]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //新規投稿画面へ
        return view('write_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Commentモデルで空のオブジェクトの生成
        $message = new \App\Message();

        //フォームから送られてきたnameとbodyを設定する
        $message->name = $request->name;
        $message->body = $request->body;

        $message->save();

        return redirect()->route('home.index')->with('success','新規投稿しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //対象のコメント情報の取得
        $message = \App\Message::find($id);

        //編集画面へ
        return view('edit',['message' => $message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //更新対象のコメント情報の取得
        $message = \App\Message::find($id);

        //コメント更新処理
        $message->body = $request->body;

        //更新確定
        $message->save();
        
        //更新後のコメント一覧画面へ
        return redirect('/home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //削除対象のコメント情報の取得
        $message = \App\Message::find($id);
        
        //コメント削除処理
        $message->delete();

        //削除後のコメント一覧画面へ
        return redirect('/home');

    }
}
