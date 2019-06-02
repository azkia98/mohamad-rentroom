@extends('admin.layout.master')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">ساخت یک اتاق جدید</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" method="POST" action="{{ route('admin.rents.store') }}">
    @csrf()

    <div class="card-body">
      <div class="form-group">
        <label for="teacher-input">استاد</label>
        <select class="form-control" name="teacher_id" id="teacher-input">
          @foreach ($teachers as $teacher)
          <option value="{{ $teacher->id }}">{{ $teacher->full_name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="lesson-input">درس</label>
        <select class="form-control" name="lesson_id" id="lesson-input">
          @foreach ($lessons as $lesson)
          <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="room-input">اتاق</label>
        <select class="form-control" name="room_id" id="room-input">
          @foreach ($rooms as $room)
          <option value="{{ $room->id }}">{{ $room->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-row">
        <div class="col">
          <label for="start_at-input">شروع</label>
          <input type="text" id="start_at-input" class="example1 form-control" />
          <input type="hidden" id="start_at-input-hide" name="start_at" />
        </div>
        <div class="col">
          <label for="end_at-input">اتمام</label>
          <input type="text" id="end_at-input" class="example1 form-control" />
          <input type="hidden" id="end_at-input-hide" name="end_at" />
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">ارسال</button>
    </div>

  </form>
</div>
@endsection


@section('scripts')
<script type="text/javascript">
  $('#start_at-input').persianDatepicker({
    altField: '#start_at-input-hide',
    timePicker: {
        enabled: true,
        meridiem: {
            enabled: true
        }
    }
  });
  $('#end_at-input').persianDatepicker({
    altField: '#end_at-input-hide',
    timePicker: {
        enabled: true,
        meridiem: {
            enabled: true
        }
    }
  });
      
</script>

@endsection