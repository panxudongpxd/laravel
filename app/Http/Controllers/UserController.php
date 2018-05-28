<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $data=$request->except(['_token']);
        //dump($data);
        /*if(!$request->has('pwd')){
           // $request->flash();
            //$resquest->flashOnly(00);将指定数据存在闪存中
            //$request->flashExcept('name');指定去除

            //return redirect('/user');
            return back()->withInput();//回到上一步操作并且将表单记录写入闪存
        }else{
            return redirect('/user')->withInput();//重定向后并将数据写入闪存参数可以是数组
        }*/

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function upload(Request $request)
    {
        //echo '文件上传操作';
        if($request->hasFile('pic')){//判断是否有文件上传
            $file=$request->file('pic');//生成文件对象
            $extention=$file->getClientOriginalExtension();//获取文件拓展名
            //dump($extention);
            //拼接文件名
            $file_name=time().(rand(0,9999)).'.'.$extention;
            $dir='./uploads/'.date('Ymd',time());
            $res=$file->move($dir,$file_name);
            //拼接路径存放到数据库
            $dir_name=$dir.'/'.$file_name;
            if($res){
                dump('文件上传成功！文件存放路径：'.$dir_name);
            }else{
                dump('文件上传失败！');
            }
        }else{
            echo '没有文件提交';
        }
    }
    public function sc()
    {
        return response()->download('a.jpg');

    }
}
