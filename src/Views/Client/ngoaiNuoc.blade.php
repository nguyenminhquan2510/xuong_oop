@extends('layout.master')

@section('title')
list
@endsection

@section('content')
<div class="page">
<div class="page_header clearfix page_margin_top">
    <div class="page_header_left">
        <h1 class="page_title">Tin Ngoài Nước</h1>
    </div>
    <div class="page_header_right">
        <ul class="bread_crumb">
            <li>
                <a title="Home" href="index9ba3.html?page=home">
                    Home
                </a>
            </li>
            <li class="separator icon_small_arrow right_gray">
                &nbsp;
            </li>
            <li>
                Tin Ngoài Nước			</li>
        </ul>
    </div>
</div>
<div class="page_layout clearfix">
    <div class="divider_block clearfix">
        <hr class="divider first">
        <hr class="divider subheader_arrow">
        <hr class="divider last">
    </div>
    <div class="row">
        <div class="column column_2_3">
            <div class="row">
                <ul class="blog big">
                    <?php foreach ($tinNgoaiNuoc as $ngoai) {?>
                        <li class="post">
                            <a href="{{ url("client/{$ngoai['id']}/{$ngoai['idDirectory']}/show") }}" title="Built on Brotherhood, Club Lives Up to Name">
                                <img src='{{show_upload($ngoai['image'])}}' alt='img' >
                            </a>
                            <div class="post_content">
                                <h2 class="with_number">
                                    <a href="{{ url("client/{$ngoai['id']}/{$ngoai['idDirectory']}/show") }}" title="Built on Brotherhood, Club Lives Up to Name">{{$ngoai['title']}}</a>
                                    <a class="comments_number" href="indexb878.html?page=post#comments_list" title="2 comments">2<span class="arrow_comments"></span></a>
                                </h2>
                                <ul class="post_details">
                                    <li class="category"><a href="index7855.html?page=category&amp;cat=world" title="WORLD">Ngoài nước</a></li>
                                    <li class="date">
                                        {{$ngoai['created_at']}}
                                    </li>
                                </ul>
                                <p style="  display: -webkit-box;
                                -webkit-line-clamp: 2;
                                -webkit-box-orient: vertical;
                                overflow: hidden;">{{$ngoai['content']}}</p>
                                <a class="read_more" href="{{ url("client/{$ngoai['id']}/{$ngoai['idDirectory']}/show") }}" title="Read more"><span class="arrow"></span><span>XEM THÊM</span></a>
                            </div>
                        </li>
                        <?php } ?>
                </ul>
            </div>
            <ul >
                <li class="left">
                    <?php for ($i=1; $i <= $totalPage; $i++) { ?>
                        <a style="background-color: #ccc;padding:5px;margin:2px;color:#000;" href="?page={{$i}}">
                            {{$i}}
                        </a>
                    <?php } ?>
                </li>
 
            </ul>
        </div>
        <div class="column column_1_3 page_margin_top">
            <h4 class="box_header page_margin_top_section">Tin Mới</h4>
            <div class="vertical_carousel_container clearfix">
                <ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                    @for ($i = 0; $i < 4; $i++)
                    <li class="post">
                        <a href="{{ url("client/{$tinNgoaiNuoc[$i]['id']}/{$tinNgoaiNuoc[$i]['idDirectory']}/show") }}" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                            <span class="icon small gallery"></span>
                            <img src='{{show_upload($tinNgoaiNuoc[$i]['image'])}}' alt='img' style="width: 100px">
                        </a>
                        <div class="post_content">
                            <h5>
                                <a href="{{ url("client/{$tinNgoaiNuoc[$i]['id']}/{$tinNgoaiNuoc[$i]['idDirectory']}/show") }}" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">{{$tinNgoaiNuoc[$i]['title']}}</a>
                            </h5>
                            <ul class="post_details simple">
                                <li class="category"><a href="indexdced.html?page=category&amp;cat=health" title="HEALTH">Ngoài nước</a></li>
                                <li class="date">
                                    {{$tinNgoaiNuoc[$i]['created_at']}}
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endfor
                </ul>
            </div>
            <h4 class="box_header page_margin_top_section">Top Authors</h4>
            <ul class="authors rating clearfix">
                <li class="author">
                    <a class="thumb" href="index27b5.html?page=author" title="Debora Hilton">
                        <img src='images/samples/Team_100x100/image_01.jpg' alt='img'>
                        <span class="number animated_element" data-value="34"></span>
                    </a>
                    <div class="details">
                        <h5><a href="index27b5.html?page=author" title="Debora Hilton">Debora Hilton</a></h5>
                        <h6>EDITOR</h6>
                    </div>
                </li>
                <li class="author">
                    <a class="thumb" href="index27b5.html?page=author" title="Anna Shubina">
                        <img src='images/samples/Team_100x100/image_02.jpg' alt='img'>
                        <span class="number animated_element" data-value="25"></span>
                    </a>
                    <div class="details">
                        <h5><a href="index27b5.html?page=author" title="Anna Shubina">Anna Shubina</a></h5>
                        <h6>EDITOR</h6>
                    </div>
                </li>
                <li class="author">
                    <a class="thumb" href="index27b5.html?page=author" title="Liam Holden">
                        <img src='images/samples/Team_100x100/image_03.jpg' alt='img'>
                        <span class="number animated_element" data-value="9"></span>
                    </a>
                    <div class="details">
                        <h5><a href="index27b5.html?page=author" title="Liam Holden">Liam Holden</a></h5>
                        <h6>PUBLISHER</h6>
                    </div>
                </li>
                <li class="author">
                    <a class="thumb" href="index27b5.html?page=author" title="Heather Dale">
                        <img src='images/samples/Team_100x100/image_04.jpg' alt='img'>
                        <span class="number animated_element" data-value="2"></span>
                    </a>
                    <div class="details">
                        <h5><a href="index27b5.html?page=author" title="Heather Dale">Heather Dale</a></h5>
                        <h6>ILLUSTRATOR</h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</div></div>
@endsection
