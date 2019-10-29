<?php

namespace App\Http\Controllers\Admin;

use App\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class TeachersController extends Controller
{
   /* public function __construct(){
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->authorize('index',User::class);
        $teacher = User::where('role','like','%TEACHER%')->get();
        return view('admin.teacher.index',['users'=>$teacher]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',User::class);
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',User::class);
        $teacher = new User();
        $teacher->name = $request->input('tname');
        $teacher->email = $request->input('tmail');
        $teacher->password = $request->input('tpass');
        $teacher->role = "TEACHER";
        $teacher->save();

        return redirect()->action('Admin\TeachersController@show',['id'=>$teacher->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$this->authorize('index',User::class);
        $teacher = User::findOrFail($id);
        $subject = Subject::where('user_id','=',$teacher->id)->get();
        return view('admin.teacher.show',['user'=>$teacher,'subjects'=>$subject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update',User::class);
        $teacher = User::findOrFail($id);
        return view('admin.teacher.edit',['user'=>$teacher]);
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
        $this->authorize('update',User::class);
        $teacher = User::findOrFail($id);
        $teacher->name = $request->input('tname');
        $teacher->email = $request->input('tmail');
        $teacher->save();
        return view('admin.teacher.show',['user'=>$teacher]);
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
}
