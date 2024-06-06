@extends('layout.master')

@section('title')
Thêm Directory
@endsection
@section('content')
@if (!empty($_SESSION['errors']))
<div class="alert alert-warning">
    <ul>
        @foreach ($_SESSION['errors'] as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@php
unset($_SESSION['errors']);
@endphp
@endif

<form action="{{ url('admin/directory/store') }}" enctype="multipart/form-data" method="POST">
    <div class="mb-3 mt-3">
        <label for="avatar" class="form-label">Name_Directory:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection