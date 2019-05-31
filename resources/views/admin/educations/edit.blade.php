@extends('admin.layout.master')

@section('content')
   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">ساخت یک مدرک جدید</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('admin.educations.update',$education) }}">
                @method('PUT') 
                @csrf()
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">نام مدرک</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" value="{{ $education->title }}" placeholder="نام مدرک">
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