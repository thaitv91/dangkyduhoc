<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserMeta;
use DB;
use Session;
use Redirect;
use Validator;
use Storage;
use Carbon\Carbon;
use Hash;

class UserController extends Controller
{

    private $user;
    private $user_meta;

    public function __construct()
    {
        $this->user = new User;
        $this->user_meta = new UserMeta;
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = $this->user->get(['id','name','email','isadmin']);
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id=-1)
    {
        //
        $user = $this->user->where('id',$id)->get(['id','name','email','isadmin'])->first();
        // dd($user->getUserInfo()->get());
        return view('admin.users.edit',compact('user'));
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
        $user = $this->user->where('id',$id)->first();
        $user_meta = $this->user_meta->where('user_id',$id)->first();
        //Format Date of birth
        $old_user = $this->user->where('id',$id)->first();
        $request->dob = $request->dob?Carbon::createFromFormat('d/m/Y',$request->dob):null;
        $validator = Validator::make($request->all(),
            [
                'email'         =>  'required|email',
                'avatar'        =>  'image',
                'dob'           =>  'nullable|date',
                'password'      =>  'nullable|min:6|confirmed|different:old_password',
            ]);

        if (isset($request->old_password) && !Hash::check($request->old_password,$old_user->password)) {
            Session::flash('error','Old password is wrong!');
            return Redirect::back();
        }

        if ($this->user->where('email',$request->email)->where('id','<>',$old_user->id)->first()) {
            Session::flash('error','Email is already exists!');
            return Redirect::back();
        }

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user->email = $request->email;
        $user->name = $request->name;
        isset($request->password)?$user->password = bcrypt($request->password):"";

        $user_meta->dob = $request->dob;
        $user_meta->gender = $request->gender;
        $user_meta->address = $request->address;
        $user_meta->phone = $request->phone;
        $user_meta->job = $request->job;
        if (isset($request->avatar)) {
            $avatar = $request->avatar;
            $ext = $request->avatar->getClientOriginalExtension();
            $new_file_name = $id."_".time().".{$ext}";
            $folder = 'public/images/users';
            $user_meta->avatar = Storage::disk('local')->putFileAs($folder,$avatar,$new_file_name);
        }

        DB::beginTransaction();
        try {
            $user->save();
            $user_meta->save();
            DB::commit();
        } catch (Exception $e) {
            Session::flash('error','Opp! Please try again.Error!');
            DB::rollback();
        }
        Session::flash('success','Success');
        return Redirect::back();
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
        $user = $this->user->where('id',$id);
        $user_meta = $this->user_meta->where('user_id',$id);
        DB::beginTransaction();
        try {
            $user->delete();
            $user_meta->delete();
            DB::commit();
        } catch (Exception $e) {
            Session::flash('error','Error');
            DB::rollback();
            return Redirect::back();
        }
        Session::flash('success','Success');
        return Redirect::back();
    }

    public function getUrlDelete(Request $request) {
        $id = $request->id;
        if (isset($id)) {
            return route('admin.user.delete',['id'=>$id]);
        }
        return -1;
    }
}
