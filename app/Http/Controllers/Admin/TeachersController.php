<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Education;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = User::with('education')->whereTeacher(1)->orderByDesc('created_at')->paginate(10);

        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $educations = Education::all();
        return view('admin.teachers.create', compact('educations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'familyname' => 'required',
            'national_code' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'education_id' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->familyname = $request->familyname;
        $user->national_code = $request->national_code;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->education_id = $request->education_id;
        $user->teacher = 1;
        $user->save();

        alert()->success('استاد شما با موفقیت ثبت شد!');
        return redirect()->route('admin.teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $teacher)
    {
        $educations = Education::all();
        return view('admin.teachers.edit', compact('teacher', 'educations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $teacher)
    {
        $request->validate([
            'name' => 'required',
            'familyname' => 'required',
            'national_code' => 'required',
            'email' => 'required',
            'password' => 'confirmed',
            'education_id' => 'required',
        ]);


        $teacher->name = $request->name;
        $teacher->familyname = $request->familyname;
        $teacher->national_code = $request->national_code;
        $teacher->email = $request->email;
        $teacher->education_id = $request->education_id;
        if ($request->password != null)
            $teacher->password = bcrypt($request->password);

        $teacher->update();
        alert()->success('استاد شما با موفقیت تغییر کرد!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $teacher)
    {
       $teacher->delete();
       
       alert()->success('کاربر شما با موفقیت حذف شد !');

       return back();
    }
}
