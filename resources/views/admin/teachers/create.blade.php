@extends('admin.layout.master')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">ساخت یک استاد جدید</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{ route('admin.teachers.store') }}">
    @csrf()
    <div class="card-body">
      <div class="form-group">
        <label for="name-input">نام</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name-input"p placeholder="نام">
      </div>
      <div class="form-group">
        <label for="familyname-input">نام خانوادگی</label>
        <input type="text" class="form-control" name="familyname" value="{{ old('familyname') }}" id="familyname-pinput" placeholder="نام خانوادگی">
      </div>
      <div class="form-group">
        <label for="national_code-input">کد ملی</label>
        <input type="text" class="form-control" name="national_code" value="{{ old('national_code') }}" id="national_copde-input" placeholder="کد ملی">
      </div>
      <div class="form-group">
        <label for="email-input">ایمیل</label>
        <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email-inputp" placeholder="ایمیل">
      </div>
      <div class="form-group">
        <label for="password-input">پسورد</label>
        <input type="password" class="form-control" name="password" value="{{ old('password') }}" id="password-inpput" placeholder="پسورد">
      </div>
      <div class="form-group">
        <label for="password_confirmation-input">تکرار پسورد</label>
        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation-input"
          placeholder="تکرار پسورد">
      </div>

      <div class="form-group">
        <label for="education-inpu">تحصیلات</label>
        <select id="education-inpu" class="form-control" name="education_id">
          @foreach ($educations as $education)
            <option value="{{ $education->id }}">{{ $education->title }}</option>

          @endforeach
        </select>
      </div>
      {{-- <div class="form-group">
                    <label for="exampleInputFile">ارسال فایل</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> --}}
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">ارسال</button>
    </div>
  </form>
</div>
@endsection