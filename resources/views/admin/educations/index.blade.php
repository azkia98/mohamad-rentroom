@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">مدرک</th>
        <th scope="col">تنظیمات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($educations as $education)
        <tr>
          <th scope="row">{{ ++$loop->index }}</th>
          <td>{{ $education->title }}</td>
          <td>
            <form class="d-inline-block" method="POST" action="{{ route('admin.educations.destroy', ['id'=>$education->id]) }}">
              @csrf()
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
            </form>
            <a href="{{ route('admin.educations.edit', ['id'=>$education->id]) }}" class="btn btn-info btn-sm">
              <i class="fa fa-edit"></i>
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $educations->links() }}
@endsection
