@extends('admin.layout.master')

@section('title')
    اساتید
@endsection

@section('content')
<div class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">نام</th>
        <th scope="col">نام خانوادگی</th>
        <th scope="col">تحصیلات</th>
        <th scope="col">رایانامه</th>
        <th scope="col">تنظیمات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($teachers as $teacher)
        <tr>
          <th scope="row">{{ ++$loop->index }}</th>
          <td>{{ $teacher->name }}</td>
          <td>{{ $teacher->familyname }}</td>
          <td>{{ optional($teacher->education)->title }}</td>
          <td>{{ $teacher->email }}</td>
          <td>
            <form class="d-inline-block" method="POST" action="{{ route('admin.teachers.destroy', ['id'=>$teacher->id]) }}">
              @csrf()
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
            </form>
            <a href="{{ route('admin.teachers.edit', ['id'=>$teacher->id]) }}" class="btn btn-info btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $teachers->links() }}
@endsection
