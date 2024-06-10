@extends('layout.master');

@section('title')
Content
@endsection

@section('content')
<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h1 class="m-0">Danh Sách Content</h1>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <a href="{{ url("admin/content/create") }}" class="btn btn-primary">Thêm mới</a>
                        {{-- @if (isset($_SESSION['status']) && $_SESSION['status'])
                        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>
                        @php
                        unset($_SESSION['status']);
                        unset($_SESSION['msg']);
                        @endphp
                        @endif

                        @if (isset($_SESSION['status']) && !$_SESSION['status'])
                        <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>
                        @php
                        unset($_SESSION['status']);
                        unset($_SESSION['msg']);
                        @endphp
                        @endif --}}
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>Created at</th>
                                        <th>Name Directory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($contents as $content )
                                <tbody>
                                    <td>
                                        <?= $content['id'] ?>
                                    </td>
                                    <td>
                                        <?= $content['title'] ?>
                                    </td>
                                    <td>
                                        <p style="  display: -webkit-box;
                                                    -webkit-line-clamp: 4;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;
                                                    color:black">
                                            <?= $content['content'] ?>
                                        </p>
                                    </td>
                                    <td>
                                        <img src="{{ show_upload($content['image']) }}" width="100px" alt="">
                                    </td>
                                    <td>
                                        <?= $content['created_at'] ?>
                                    </td>
                                    <td>
                                        <?= $content['name'] ?>
                                    </td>
                                    <td>
                                        <a href="{{ url("admin/content/{$content['id']}/show") }}"
                                            class="btn btn-info">Xem</a>
                                        <a href="{{ url("admin/content/{$content['id']}/edit") }}"
                                            class="btn btn-warning">Sửa</a>
                                        <a href="{{ url("admin/content/{$content['id']}/delete" ) }}"
                                            onclick="return confirm('Ban muon xoa chu')" class="btn btn-danger">Xóa</a>
                                    </td>

                                </tbody>
                                @endforeach
                            </table>
                            <?php for ($i=1; $i <= $totalPage; $i++) { ?>
                                <a style="background-color: #ccc;padding:5px;margin:2px;color:#000;" href="?page={{$i}}">
                                    {{$i}}
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection