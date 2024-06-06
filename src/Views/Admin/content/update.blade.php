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
            <input type="text" class="form-control" id="content" value="{{$content['content']}}" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" value="{{$content['image']}}" placeholder="Enter image" name="image"><img width="100px" src="{{show_upload($content['image'])}}" alt="">
        </div>
        <div class="mb-3 mt-3">
            <label for="created_at" class="form-label">Created_at:</label>
            <input type="created_at" class="form-control" id="created_at" value="{{$content['created_at']}}" placeholder="" name="email">
        </div>
        <div class="mb-3 mt-3">
            <label for="Name_Directory" class="form-label">Name_Directory:</label>
            <input type="text" class="form-control" id="Name_Directory" value="{{$content['name']}}" placeholder="Enter Name_Directory" name="Name_Directory">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection