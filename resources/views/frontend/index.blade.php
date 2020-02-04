@extends('frontend.layouts.app')
@section('styles')
<link rel="stylesheet" href="/css/main/index.css"/>
@endsection 
@section('page', 'main')
@section('content')
<div class="wrapper">
<section class="post_list">
    <div class="post_detail has_image">
        <div class="post_info">
            <article>
                <div class="post_desc">
                    <div class="post_tag">tech</div>
                    <h3><a href="#">Lorem Ipsum</a></h3>
                    <div class="post_etc">
                        <div class="post_author"><i class="fa fa-at"></i>anyiris</div>
                        <div class="post_date">2020.01.25</div>
                    </div>
                    <p class="description">
                        국토와 자원은 국가의 보호를 받으며, 국가는 그 균형있는 개발과 이용을 위하여 필요한 계획을 수립한다. 모든 국민은 법률이 정하는 바에 의하여 국가기관에 문서로 청원할 권리를 가진다.
                    </p>
                </div>
            </article>
        </div>
        <div class="post_image">
        <a href="#"><img src="/assets/images/sample/pexels-photo-532571.jpeg" /></a>
        </div>
    </div>
    <div class="post_detail has_image">
        <div class="post_info">
            <article>
                <div class="post_desc">
                    <div class="post_tag">tech</div>
                    <h3>Lorem Ipsum</h3>
                    <div class="post_etc">
                        <div class="post_author"><i class="fa fa-at"></i>anyiris</div>
                        <div class="post_date">2020.01.25</div>
                    </div>
                    <p class="description">
                        국토와 자원은 국가의 보호를 받으며, 국가는 그 균형있는 개발과 이용을 위하여 필요한 계획을 수립한다. 모든 국민은 법률이 정하는 바에 의하여 국가기관에 문서로 청원할 권리를 가진다.
                    </p>
                </div>
            </article>
        </div>
        <div class="post_image">
            <a href="#"><img src="/assets/images/sample/pexels-photo-532571.jpeg" /></a>
        </div>
    </div>
    <div class="post_detail">
        <div class="post_info">
            <article>
                <div class="post_desc">
                    <div class="post_tag">tech</div>
                    <h3>Lorem Ipsum</h3>
                    <div class="post_etc">
                        <div class="post_author"><i class="fa fa-at"></i>anyiris</div>
                        <div class="post_date">2020.01.25</div>
                    </div>
                    <p class="description">
                        국토와 자원은 국가의 보호를 받으며, 국가는 그 균형있는 개발과 이용을 위하여 필요한 계획을 수립한다. 모든 국민은 법률이 정하는 바에 의하여 국가기관에 문서로 청원할 권리를 가진다.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>
<div class="bottom">
    <section class="summary">
        <h2><i class="fab fa-github"></i>REPOSITORY</h2>
        <hr/>
        <ul>
            <li><a href="#">repo name</a></li>
            <li><a href="#">repo name</a></li>
            <li><a href="#">repo name</a></li>
            <li><a href="#">repo name</a></li>
        </ul>
    </section>
    <section class="summary">
        <h2><i class="fas fa-blog"></i>최신글</h2>
        <hr/>
        <ul>
            <li><a href="#">가나다라</a></li>
            <li><a href="#">제목1</a></li>
            <li><a href="#">제목2</a></li>
            <li><a href="#">제목3</a></li>
        </ul>
    </section>
   
</div>
</div>
@endsection