@extends('admin.layout.master')

@section('content')
<div class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">استاد</th>
        <th scope="col">اتاق</th>
        <th scope="col">درس</th>
        <th scope="col">شروع</th>
        <th scope="col">اتمام</th>
        <th scope="col">وضعیت</th>
        <th scope="col">تنظیمات</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rents as $rent)
        <tr>
          <th scope="row">{{ ++$loop->index }}</th>
          <td>{{ optional($rent->user)->name }}</td>
          <td>{{ optional($rent->room)->name }}</td>
          <td>{{ optional($rent->lesson)->title }}</td>
          <td>{{ verta($rent->start_at)->format('%B/j H:i') }}</td>
          <td>{{ verta($rent->end_at)->format('%B/j H:i') }}</td>
          @if ($rent->isExpired())
            <td><i class="fa fa-clock-o text-danger"></i></td>
          @else 
            <td><i class="fa fa-clock-o text-success"></i></td> 
          @endif
          <td>
            <form class="d-inline-block" method="POST" action="{{ route('admin.rents.destroy', ['id'=>$rent->id]) }}">
              @csrf()
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
            </form>
            {{-- <a href="{{ route('admin.rents.edit', ['id'=>$rent->id]) }}" class="btn btn-info btn-sm">
              <i class="fa fa-edit"></i>
            </a> --}}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{ $rents->links() }}
@endsection
