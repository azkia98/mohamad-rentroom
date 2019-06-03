@extends('admin.layout.master')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">ساخت یک اتاق جدید</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{ route('admin.rooms.update',$room) }}">
    @csrf()
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="name-input">نام</label>
        <input type="text" class="form-control" name="name" value="{{ old('name',optional($room)->name) }}" id="name-input" placeholder="نام">
      </div>
      <div class="form-group">
        <label for="capacity-input">ظرفیت</label>
        <input type="text" class="form-control" name="capacity" value="{{ old('capacity',optional($room)->capacity) }}" id="capacity-input" placeholder="ظرفیت">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="custom-control mx-3 mb-3 custom-checkbox">
      <input type="checkbox" name="projector" {{ $room->projector ? 'checked' : '' }}  class="custom-control-input" id="customCheckDisabled">
      <label class="custom-control-label" for="customCheckDisabled">پروژکتور</label>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">ارسال</button>
    </div>
  </form>
</div>
@endsection