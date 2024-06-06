@extends('layout.master')

@section('title')
Thêm mới Content
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

<form action="{{ url('admin/content/store') }}" enctype="multipart/form-data" method="POST">
    <div class="mb-3 mt-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
    </div>
    <div class="mb-3 mt-3">
        <label for="content" class="form-label">Content:</label>
        <input type="text" class="form-control" id="content" placeholder="Enter content" name="content" style="height: 300px">
    </div>
    <div class="mb-3 mt-3">
        <label for="name" class="form-label">Name Directory:</label> <br>
        <select name="idDirectory" id="">
            <option value=""></option>
            <?php foreach($name_directory as $name):?>
            <option value="<?=$name['idDirectory']?>"><?=$name['name']?></option>
            <?php endforeach?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection