<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Room;
use App\User;
use Carbon\Carbon;

class RentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rent::orderByDesc('updated_at')->paginate(10);
        return view('admin.rents.index', compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = User::teachers()->get();
        $lessons = Lesson::all();
        $rooms = Room::all();

        return view('admin.rents.create', compact('teachers', 'lessons', 'rooms'));
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
            'teacher_id' => 'required',
            'lesson_id' => 'required',
            'room_id' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
        ]);




        $rent = new Rent();
        $rent->user_id = $request->teacher_id;
        $rent->lesson_id = $request->lesson_id;
        $rent->room_id = $request->room_id;
        $rent->start_at = now()->createFromTimestamp($request->start_at / 1000)->toDateTimeString();
        $rent->end_at = now()->createFromTimestamp($request->end_at / 1000)->toDateTimeString();
        $rent->save();

        alert()->success('اتاق شما با موفقیت رزرو شد!');

        return redirect()->route('admin.rents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        $rent->delete();

        alert()->success('رزور شما با موفقیت حذف شد!');

        return redirect()->back();
    }
}
