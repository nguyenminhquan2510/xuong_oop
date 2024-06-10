@extends('layout.master')

@section('title')
    Sửa Content
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

    <form action="{{ url("admin/content/{$content['id']}/update") }}" enctype="multipart/form-data" method="POST">
        <div class="mb-3 mt-3">
            <label for="content" class="form-label">Content:</label>
            <input type="text" class="form-control" id="content" value="{{$content['content']}}" placeholder="Enter name" name="content" style="height: 300px">
        </div>
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" value="{{$content['title']}}" placeholder="Enter name" name="title">
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" value="{{$content['image']}}" placeholder="Enter image" name="image"><img width="100px" src="{{show_upload($content['image'])}}" alt="">
        </div>
        <div class="mb-3 mt-3">
            <label for="created_at" class="form-label">Created_at:</label>
            <input type="created_at" class="form-control" id="created_at" value="{{$content['created_at']}}" placeholder="" name="created_at">
        </div>
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name Directory:</label> <br>
            <select name="idDirectory" id="">
                <option value="{{$content['idDirectory']}}"><?= $content['name']?></option>
                @foreach ($name_directory as $n)
                <option value="{{$n['idDirectory']}}"><?= $n['name']?></option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection