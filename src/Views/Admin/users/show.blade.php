@extends('layout.master')

@section('title')
Show
@endsection

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>Trường</th>
            <th>Giá trị</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($user as $key => $value)
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $value }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection