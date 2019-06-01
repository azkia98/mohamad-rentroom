@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">نام</th>
        <th scope="col">ظرفیت</th>
        <th scope="col">پروژکتور</th>
        <th scope="col">تنظیمات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rooms as $room)
        <tr>
          <th scope="row">{{ ++$loop->index }}</th>
          <td>{{ $room->name }}</td>
          <td>{{ $room->capacity }}</td>
          <td>{{ ($room->projector) ? 'دارد' : 'ندارد' }}</td>
          <td>
            <form class="d-inline-block" method="POST" action="{{ route('admin.rooms.destroy', ['id'=>$room->id]) }}">
              @csrf()
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
            </form>
            <a href="{{ route('admin.rooms.edit', ['id'=>$room->id]) }}" class="btn btn-info btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $rooms->links() }}
@endsection
