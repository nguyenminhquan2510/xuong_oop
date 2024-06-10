@extends('layout.master')

@section('title')
Trang Chủ
@endsection

@section('content')
<div class="caroufredsel_wrapper caroufredsel_wrapper_slider">
    <ul class="slider">
        <?php for ($i=0; $i < 4 ; $i++) { ?>

        <li class="slide">
            <img src='{{show_upload($home[$i]['image'])}}' alt='img'>
            <div class="slider_content_box">
                <ul class="post_details simple">
                    <li class="category"><a href="indexdced.html?page=category&amp;cat=health" title="HEALTH">Tin
                            Mới</a></li>
                    <li class="date">
                        {{$home[$i]['created_at']}}
                    </li>
                </ul>
                <h2><a href="{{ url("client/{$home[$i]['id']}/{$home[$i]['idDirectory']}/show") }}"
                        title="Nuclear Fusion Closer to Becoming a Reality">{{$home[$i]['title']}}</a></h2>
                <p class="clearfix">{{$home[$i]['content']}}</p>
            </div>
        </li>
        <?php }?>

    </ul>
</div>
<div class="page">
    <div class='slider_posts_list_container'>
    </div>
    <div class="page_layout page_margin_top clearfix">
        <div class="row">
            <div class="column column_2_3">
                <h4 class="box_header">Tin Mới Nhất</h4>
                <div class="row" style="display: flex; flex-wrap:wrap">
                    <?php for ($i=0; $i < 4 ; $i++) { ?>

                    <li class="post" style="width: 45%; margin:5px">
                        <a href="{{ url("client/{$home[$i]['id']}/{$home[$i]['idDirectory']}/show") }}" title="Nuclear Fusion Closer to Becoming a Reality">
                            <img src="{{show_upload($home[$i]['image'])}}" alt='img' height="200px">
                        </a>
                        <h2 class="with_number">
                            <a href="{{ url("client/{$home[$i]['id']}/{$home[$i]['idDirectory']}/show") }}" title="Nuclear Fusion Closer to Becoming a Reality"
                                style="  display: -webkit-box;
                        -webkit-line-clamp: 2;
                        -webkit-box-orient: vertical;
                        overflow: hidden;">
                                {{$home[$i]['title']}}
                            </a>

                        </h2>
                        <ul class="post_details">
                            
                            <li style="border: 1px solid #ccc" class="date">
                                {{$home[$i]['created_at']}}
                            </li>
                        </ul>

                        <p style="  display: -webkit-box;
                        -webkit-line-clamp: 1;
                        -webkit-box-orient: vertical;
                        overflow: hidden;">{{$home[$i]['content']}} </p>
                        <a class="read_more" href="{{ url("client/{$home[$i]['id']}/{$home[$i]['idDirectory']}/show") }}" title="Read more"><span
                                class="arrow"></span><span>XEM THÊM</span></a>
                    </li>
                    <?php } ?>


                </div>
                <div class="row page_margin_top_section">
                    <h4 class="box_header">Tin Sức Khỏe Mới Nhất</h4>
                    <div class="horizontal_carousel_container page_margin_top">
                        <ul
                            class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                            <?php for ($i=0; $i < 4 ; $i++) { ?>

                            <li class="post">
                                <a href="{{ url("client/{$newSucKhoe[$i]['id']}/{$newSucKhoe[$i]['idDirectory']}/show") }}" title="New Painkiller Rekindles Addiction Concerns">
                                    <img src="{{show_upload($newSucKhoe[$i]['image'])}}" alt='img' height="130px">
                                </a>
                                <h5><a href="{{ url("client/{$newSucKhoe[$i]['id']}/{$newSucKhoe[$i]['idDirectory']}/show") }}"
                                        title="New Painkiller Rekindles Addiction Concerns" style="  display: -webkit-box;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;">{{$newSucKhoe[$i]['title']}}</a></h5>
                                <ul class="post_details simple">
                                    <li class="category"><a href="{{ url("client/{$newSucKhoe[$i]['id']}/{$newSucKhoe[$i]['idDirectory']}/show") }}&amp;cat=health"
                                            title="HEALTH">XEM THÊM</a></li>
                                    <li class="date">
                                        {{$newSucKhoe[$i]['created_at']}}
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
                <div class="row page_margin_top_section">
                    <h4 class="box_header">Tin Trong Nước Mới Nhất</h4>
                    <div class="row">
                        <ul class="blog column column_1_2">
                            <?php for ($i=0; $i < 1 ; $i++) { ?>

                            <li class="post">
                                <a href="{{ url("client/{$newTrongNuoc[$i]['id']}/{$newTrongNuoc[$i]['idDirectory']}/show") }}"
                                    title="High Altitudes May Aid Weight Control">
                                    <span class="icon gallery"></span>
                                    <img src="{{show_upload($newTrongNuoc[$i]['image'])}}" alt='img'>
                                </a>
                                <h2 class="with_number">
                                    <a href="{{ url("client/{$newTrongNuoc[$i]['id']}/{$newTrongNuoc[$i]['idDirectory']}/show") }}"
                                        title="High Altitudes May Aid Weight Control" style="  display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;"> {{$newTrongNuoc[$i]['title']}}</a>
                                    <a class="comments_number" href="{{ url("client/{$newTrongNuoc[$i]['id']}/show") }}#comments_list"
                                        title="2 comments">2<span class="arrow_comments"></span></a>
                                </h2>
                                <ul class="post_details">
                                    
                                    <li  style="border: 1px solid #ccc" class="date">
                                        {{$newTrongNuoc[$i]['created_at']}}
                                    </li>
                                </ul>
                                <p style="  display: -webkit-box;
                                -webkit-line-clamp: 4;
                                -webkit-box-orient: vertical;
                                overflow: hidden;">{{$newTrongNuoc[$i]['content']}}</p>
                                <a class="read_more" href="{{ url("client/{$newTrongNuoc[$i]['id']}/{$newTrongNuoc[$i]['idDirectory']}/show") }}" title="Read more"><span
                                        class="arrow"></span><span>XEM THÊM</span></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="column column_1_2">
                            <ul class="blog small clearfix">
                            <?php for ($i=1;  $i <4 ; $i++) { ?>
                                <li class="post">
                                    <a href="{{ url("client/{$newTrongNuoc[$i]['id']}/{$newTrongNuoc[$i]['idDirectory']}/show") }}"
                                        title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                        <img src="{{show_upload($newTrongNuoc[$i]['image'])}}" alt='img' height="60px" style="width:100px" w>
                                    </a>
                                    <div class="post_content">
                                        <h5>
                                            <a href="{{ url("client/{$newTrongNuoc[$i]['id']}/{$newTrongNuoc[$i]['idDirectory']}/show") }}"
                                                title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
                                                {{$newTrongNuoc[$i]['title']}}</a>
                                        </h5>
                                        <ul class="post_details simple">
                                            <li class="category"><a href="{{ url("client/{$newTrongNuoc[$i]['id']}/{$newTrongNuoc[$i]['idDirectory']}/show") }}&amp;cat=health"
                                                    title="HEALTH">XEM THÊM</a></li>
                                            <li class="date">
                                                {{$newTrongNuoc[$i]['created_at']}}
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <?php } ?>

                            </ul>
                            <a class="more page_margin_top" href="{{url("client/trongnuoc")}}">XEM THÊM TIN TỨC</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="column column_1_3">
                <h4 class="box_header">Tin Ngoài Nước Mới Nhất</h4>
                <ul class="blog small_margin clearfix">
                    @for ($i = 0; $i < 4; $i++)
                    <li class="post">
                        <a href="{{ url("client/{$newNgoaiNuoc[$i]['id']}/{$newNgoaiNuoc[$i]['idDirectory']}/show") }}" title="The Public Health Crisis Hiding in Our Food">
                            <span class="icon gallery"></span>
                            <img src="{{show_upload($newNgoaiNuoc[$i]['image'])}}" alt='img'>
                        </a>
                        <div class="post_content">
                            <h5>
                                <a href="{{ url("client/{$newNgoaiNuoc[$i]['id']}/{$newNgoaiNuoc[$i]['idDirectory']}/show") }}"
                                    title="The Public Health Crisis Hiding in Our Food" style="  display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;"> {{$newNgoaiNuoc[$i]['title']}}</a>
                            </h5>
                            <ul class="post_details simple">
                                <li class="category"><a href="{{ url("client/{$newNgoaiNuoc[$i]['id']}/{$newNgoaiNuoc[$i]['idDirectory']}/show") }}&amp;cat=health"
                                        title="HEALTH">XEM THÊM</a></li>
                                <li class="date">
                                    {{$newNgoaiNuoc[$i]['created_at']}}
                                </li>
                            </ul>
                        </div>
                    </li>
                        
                    @endfor
                </ul>
                <h4 class="box_header page_margin_top_section">Tin Thể Thao Mới Nhất</h4>
                <div class="vertical_carousel_container clearfix">
                    <ul
                        class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                        # code...
                        <?php for ($i=0; $i < 4 ; $i++) { ?>
                        <li class="post">
                            <a href="{{ url("client/{$newTheThao[$i]['id']}/{$newTheThao[$i]['idDirectory']}/show") }}"
                                title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                <span class="icon small gallery"></span>
                                <img src="{{show_upload($newTheThao[$i]['image'])}}" alt='img' height="50px">
                            </a>
                            <div class="post_content">
                                <h5>
                                    <a href="{{ url("client/{$newTheThao[$i]['id']}/{$newTheThao[$i]['idDirectory']}/show") }}"
                                        title="Study Linking Illnes and Salt Leaves Researchers Doubtful">{{$newTheThao[$i]['title']}}</a>
                                </h5>
                                <ul class="post_details simple">
                                    <li class="category"><a href="{{ url("client/{$newTheThao[$i]['id']}/{$newTheThao[$i]['idDirectory']}/show") }}&amp;cat=health"
                                            title="HEALTH">XEM THÊM</a></li>
                                    <li class="date">
                                        {{$newTheThao[$i]['created_at']}}
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php } ?>



                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
<div class="background_overlay"></div>
@endsection