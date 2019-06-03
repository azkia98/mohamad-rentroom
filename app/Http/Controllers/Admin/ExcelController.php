<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\User;

class ExcelController extends Controller
{
    public function importForm()
    {
        return view('admin.excel.import');
    }

    public function import(Request $request)
    {

        $excelDatas =  Excel::load($request->file('excel'), function ($reader) {
            $reader->each(function ($sheet) {
                if($sheet->name == null or $sheet->familyname == null or $sheet->email == null)
                    return false;

                
                User::create([
                    'name' => $sheet->name,
                    'familyname' => $sheet->familyname,
                    'national_code' => $sheet->national_code,
                    'email' => $sheet->email,
                    'password' => bcrypt($sheet->national_code),
                    'teacher' => true
                ]);
            });
        })->get();

        alert()->success('استادان شما با موفقیت ثبت شدن!!');

        return redirect()->route('admin.teachers.index');
    }

    public function export()
    {
        Excel::create('Filename', function ($excel) {
            $excel->sheet('Sheetname', function ($sheet) {
                $sheet->fromArray(User::select('name', 'familyname', 'email', 'national_code', 'created_at')->whereTeacher(true)->get());
            });
        })->download('xlsx');
    }
}
