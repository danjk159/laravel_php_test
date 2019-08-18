<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\User as UserResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * 显示应用程序中所有用户的列表
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::select('select * from users');
        return  $users;
    }

    /**
     * 创建一个新的控制器实例。
     *
     * @param  UserRepository  $users
     * @return void
     */
    // public function __construct(UserRepository $users)
    // {
    //     $this->users = $users;
    // }

    /**
     * 展示给定用户的信息。
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // $user= DB::select('select * from users where id=?',[$id]);
        // $user = DB::table('users')->where('id',$id)->first();
        // $user = User::where('id', $id) -> get();
        // $user = User::find( $id) -> phone;
        // return response()->json($user);
        return (new UserResource(User::find($id)))
        ->additional(['code' =>'1','message'=>'test']);
    }
    /**
     * 储存一个新用户。
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        //
    }
}
