@extends('layout.master')

@section('title')

@endsection
@section('content')
<div class="page">
    <div class="page_layout page_margin_top clearfix">
        <hr class="divider page_margin_top">
        <div class="row page_margin_top">
            <div class="column column_2_3">
                <div class="row">
                    <div class="post single">
                        <h1 class="post_title">
                           {{$show['title']}}
                        </h1>
                        <ul class="post_details clearfix">
                            <li class="detail category">In <a href="indexdced.html?page=category&amp;cat=health"
                                    title="HEALTH">{{$show['name']}}</a></li>
                            <li class="detail date">{{$show['title']}}</li>
                            <li class="detail author">By <a href="index27b5.html?page=author" title="Anna Shubina">Anna
                                    Shubina</a></li>
                            <li class="detail views">6 254 Views</li>
                            <li class="detail comments"><a href="#comments_list" class="scroll_to_comments"
                                    title="6 Comments">6 Comments</a></li>
                        </ul>
                        <a href="" class="post_image page_margin_top prettyPhoto"
                            title="Britons are never more comfortable than when talking about the weather.">
                            <img src='{{show_upload($show['image'])}}' alt='img'>
                        </a>
                        <div class="sentence">
                            
                        </div>
                        <div class="post_content page_margin_top_section clearfix">
                            <div class="content_box">
                                <div class="text">
                                    <p>{{$show['content']}}</p>
                                </div>
                            </div>
                            <div class="author_box animated_element">
                                <div class="author">
                                    <a title="Anna Shubina" href="index27b5.html?page=author" class="thumb">
                                        <img alt="img" src="images/samples/Team_100x100/image_02.jpg">
                                    </a>
                                    <div class="details">
                                        <h5><a title="Anna Shubina" href="index27b5.html?page=author">Anna Shubina</a>
                                        </h5>
                                        <h6>EDITOR</h6>
                                        <a href="index27b5.html?page=author"
                                            class="more highlight margin_top_15">PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row page_margin_top">
                    <div class="share_box clearfix">
                        <label>Share:</label>
                        <ul class="social_icons clearfix">
                            <li>
                                <a target="_blank" title="" href="https://facebook.com/QuanticaLabs"
                                    class="social_icon facebook">
                                    &nbsp;
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="" href="https://twitter.com/QuanticaLabs"
                                    class="social_icon twitter">
                                    &nbsp;
                                </a>
                            </li>
                            <li>
                                <a title=""
                                    href="https://quanticalabs.com/cdn-cgi/l/email-protection#a7c4c8c9d3c6c4d3e7d7d5c2d4d4d5c8c8ca89c4c8ca"
                                    class="social_icon mail">
                                    &nbsp;
                                </a>
                            </li>
                            <li>
                                <a title="" href="#" class="social_icon skype">
                                    &nbsp;
                                </a>
                            </li>
                            <li>
                                <a title="" href="https://1.envato.market/quanticalabs" class="social_icon envato">
                                    &nbsp;
                                </a>
                            </li>
                            <li>
                                <a title="" href="#" class="social_icon instagram">
                                    &nbsp;
                                </a>
                            </li>
                            <li>
                                <a title="" href="#" class="social_icon pinterest">
                                    &nbsp;
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row page_margin_top_section">
                    <h4 class="box_header">6 Comments</h4>
                    <ul id="comments_list">
                        <li class="comment clearfix" id="comment-1">
                            <div class="comment_author_avatar">
                                &nbsp;
                            </div>
                            <div class="comment_details">
                                <div class="posted_by clearfix">
                                    <h5><a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a></h5>
                                    <abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
                                </div>
                                <p>
                                    Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum
                                    eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum
                                    primis orci cubilla gravida id interdum eget.
                                </p>
                                <a class="read_more" href="#comment_form" title="Reply">
                                    <span class="arrow"></span><span>REPLY</span>
                                </a>
                            </div>
                        </li>
                        <li class="comment clearfix" id="comment-2">
                            <div class="comment_author_avatar">
                                &nbsp;
                            </div>
                            <div class="comment_details">
                                <div class="posted_by clearfix">
                                    <h5><a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a></h5>
                                    <abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
                                </div>
                                <p>
                                    Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum
                                    eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum
                                    primis orci cubilla gravida id interdum eget.
                                </p>
                                <a class="read_more" href="#comment_form" title="Reply">
                                    <span class="arrow"></span><span>REPLY</span>
                                </a>
                            </div>
                            <ul class="children">
                                <li class="comment clearfix">
                                    <a href="#comment-2" class="parent_arrow"></a>
                                    <div class="comment_author_avatar">
                                        &nbsp;
                                    </div>
                                    <div class="comment_details">
                                        <div class="posted_by clearfix">
                                            <h5><a class="author" href="#" title="Keith Douglas">Keith Douglas</a><a
                                                    href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
                                            <abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
                                        </div>
                                        <p>
                                            Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at
                                            interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt
                                            risus id interdum primis orci cubilla gravida id interdum eget.
                                        </p>
                                        <a class="read_more" href="#comment_form" title="Reply">
                                            <span class="arrow"></span><span>REPLY</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="comment clearfix">
                                    <a href="#comment-2" class="parent_arrow"></a>
                                    <div class="comment_author_avatar">
                                        &nbsp;
                                    </div>
                                    <div class="comment_details">
                                        <div class="posted_by clearfix">
                                            <h5><a class="author" href="#" title="Keith Douglas">Keith Douglas</a><a
                                                    href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
                                            <abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
                                        </div>
                                        <p>
                                            Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at
                                            interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt
                                            risus id interdum primis orci cubilla gravida id interdum eget.
                                        </p>
                                        <a class="read_more" href="#comment_form" title="Reply">
                                            <span class="arrow"></span><span>REPLY</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="pagination page_margin_top_section">
                        <li class="left">
                            <a href="#" title="">&nbsp;</a>
                        </li>
                        <li class="selected">
                            <a href="#" title="">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                3
                            </a>
                        </li>
                        <li class="right">
                            <a href="#" title="">&nbsp;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="column column_1_3">
                <div class="tabs no_scroll clearfix">
                    <ul class="tabs_navigation clearfix">
                        <li>
                            <a href="#sidebar-most-read" title="Most Read">
                                Most Read
                            </a>
                            <span></span>
                        </li>
                        <li>
                            <a href="#sidebar-most-commented" title="Commented">
                                Commented
                            </a>
                            <span></span>
                        </li>
                    </ul>
                    <div id="sidebar-most-read">
                        <ul class="blog rating page_margin_top clearfix">
                            <li class="post">
                                <a href="indexb878.html?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
                                    <img src='images/samples/510x187/image_12.jpg' alt='img'>
                                </a>
                                <div class="post_content">
                                    <span class="number animated_element" data-value="6 257"></span>
                                    <h5><a href="indexb878.html?page=post"
                                            title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles
                                            Addiction Concerns</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="indexdced.html?page=category&amp;cat=health"
                                                title="HEALTH">HEALTH</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="5 062"></span>
                                    <h5><a href="index224d.html?page=post_soundcloud"
                                            title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles
                                            Addiction Concerns</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="index7855.html?page=category&amp;cat=world"
                                                title="WORLD">WORLD</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="4 778"></span>
                                    <h5><a href="index4b64.html?page=post_quote"
                                            title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking
                                            the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="index5d3d.html?page=category&amp;cat=sports"
                                                title="SPORTS">SPORTS</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="754"></span>
                                    <h5><a href="index4e1c.html?page=post_small_image"
                                            title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
                                            Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="indexdd47.html?page=category&amp;cat=science"
                                                title="SCIENCE">SCIENCE</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="52"></span>
                                    <h5><a href="indexb878.html?page=post"
                                            title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian
                                            Civilians Trapped for Months Continue to be Evacuated</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="indexdd47.html?page=category&amp;cat=science"
                                                title="SCIENCE">SCIENCE</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a class="more page_margin_top" href="#">SHOW MORE</a>
                    </div>
                    <div id="sidebar-most-commented">
                        <ul class="blog rating page_margin_top clearfix">
                            <li class="post">
                                <a href="indexb878.html?page=post" title="Nuclear Fusion Closer to Becoming a Reality">
                                    <img src='images/samples/510x187/image_02.jpg' alt='img'>
                                </a>
                                <div class="post_content">
                                    <span class="number animated_element" data-value="70"></span>
                                    <h5><a href="indexb878.html?page=post"
                                            title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles
                                            Addiction Concerns</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="indexdced.html?page=category&amp;cat=health"
                                                title="HEALTH">HEALTH</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="62"></span>
                                    <h5><a href="indexb878.html?page=post"
                                            title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles
                                            Addiction Concerns</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="index7855.html?page=category&amp;cat=world"
                                                title="WORLD">WORLD</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="30"></span>
                                    <h5><a href="indexb878.html?page=post"
                                            title="Seeking the Right Chemistry, Drug Makers Hunt for Mergers">Seeking
                                            the Right Chemistry, Drug Makers Hunt for Mergers</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="index5d3d.html?page=category&amp;cat=sports"
                                                title="SPORTS">SPORTS</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="25"></span>
                                    <h5><a href="index205e.html?page=post_quote_2"
                                            title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study
                                            Linking Illnes and Salt Leaves Researchers Doubtful</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="indexdd47.html?page=category&amp;cat=science"
                                                title="SCIENCE">SCIENCE</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="post">
                                <div class="post_content">
                                    <span class="number animated_element" data-value="4"></span>
                                    <h5><a href="indexb878.html?page=post"
                                            title="Syrian Civilians Trapped for Months Continue to be Evacuated">Syrian
                                            Civilians Trapped for Months Continue to be Evacuated</a></h5>
                                    <ul class="post_details simple">
                                        <li class="category"><a href="indexdd47.html?page=category&amp;cat=science"
                                                title="SCIENCE">SCIENCE</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a class="more page_margin_top" href="#">SHOW MORE</a>
                    </div>
                </div>
                <h4 class="box_header page_margin_top_section">Bài Viết Liên Quan</h4>
                <div class="vertical_carousel_container clearfix">
                    <ul
                        class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
                        @foreach ($show as $item)
                        <li class="post">
                            <a href="indexba02.html?page=post_gallery"
                                title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
                                <span class="icon small gallery"></span>
                                <img src='images/samples/100x100/image_06.jpg' alt='img'>
                            </a>
                            <div class="post_content">
                                <h5>
                                    <a href="indexba02.html?page=post_gallery"
                                        title="Study Linking Illnes and Salt Leaves Researchers Doubtful">Study Linking
                                        Illnes and Salt Leaves Researchers Doubtful</a>
                                </h5>
                                <ul class="post_details simple">
                                    <li class="category"><a href="indexdced.html?page=category&amp;cat=health"
                                            title="HEALTH">HEALTH</a></li>
                                    <li class="date">
                                        10:11 PM, Feb 02
                                    </li>
                                </ul>
                            </div>
                        </li>
                            
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection