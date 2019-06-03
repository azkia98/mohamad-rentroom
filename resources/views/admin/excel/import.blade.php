@extends('admin.layout.master')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">اضافه کردن استاد توسط فایل اکسل</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.excel.import') }}">
    @csrf()
    <div class="card-body">
      <div class="custom-file">
          <input type="file" name="excel" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">فایل اکسل انتخاب کنید</label>
        </div> 
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">ارسال</button>
    </div>
  </form>
</div>
@endsection