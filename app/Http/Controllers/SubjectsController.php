<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Subject;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.index',['subjects'=>$subjects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Subject::class);
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subject = new Subject();
        $this->authorize('create',Subject::class);
        $subject->subj_id = $request->input('subjid');
        $subject->subj_name = $request->input('subjname');
        $subject->lec_credit = intval($request->input('leccredit'));
        $subject->lab_credit = intval($request->input('labcredit'));
        $subject->prerequisite = "-";
        $subject->save();

        return redirect()->action('SubjectsController@show',['id'=>$subject->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        //$this->authorize('update',Subject::class);
        $teacher = User::findOrFail($subject->user_id);
        return view('admin.show',['subject'=> $subject,'user'=>$teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $this->authorize('update',Subject::class);
        $allsub = Subject::all();
        return view('admin.edit',['subject'=>$subject],['allsub'=>$allsub]);
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
        $subject = Subject::findOrFail($id);
        $subject->subj_id = $request->input('subjid');
        $subject->subj_name = $request->input('subjname');
        $subject->lec_credit = intval($request->input('leccredit'));
        $subject->lab_credit = intval($request->input('labcredit'));
        $subject->prerequisite = $request->input('prereq');
        $subject->save();

        return redirect()->action('SubjectsController@show',['id'=>$subject->id]);
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
