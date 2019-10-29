<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class StudentsController extends Controller
{
    /*public function __construct(){
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
        $student = User::paginate(100);
        return view('admin.student.index',['users'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',User::class);
        return view('admin.student.create');
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
        $student = new User();
        $student->name = $request->input('name');
        $student->email = $request->input('mail');
        $student->password = $request->input('pass');
        $student->role = "STUDENT";
        $student->save();

        return redirect()->action('Admin\TeachersController@show',['id'=>$student->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::findOrFail($id);

        return view('admin.student.show',['user'=>$student]);
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
        $student = User::findOrFail($id);

        return view('admin.student.edit',['user'=>$student]);
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
        $student = User::findOrFail($id);
        $student->name = $request->input('name');
        $student->email = $request->input('mail');
        $student->save();
        return view('admin.student.show',['user'=>$student]);
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
