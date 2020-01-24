@extends('frontend.layouts.app')
@section('styles')
<link rel="stylesheet" href="/css/main/index.css"/>
@endsection 
@section('page', 'main')
@section('content')
<div class="wrap">
<section class="profile_wrap">
    <div class="columns">
        <div class="col col-3 profile">
            <div class="info">
                <div class="photo">
                <img src="{{asset('assets/images/profile_image.png')}}" width="100" height="100"/>
                </div>
                <dl>
                <dt>아이리스</dt>
                <dd>Web Development</dd>
                <dd>social</dd>
                </dl>
            </div>
        </div>
        <div class="col col-7">
            <div class="termial">
                <div class="terminal_bar">
                    <ul>
                        <li class="icon close">cl</li>
                        <li class="icon min">mi</li>
                        <li class="icon max">mx</li>
                    </ul>
                    <div class="termial_bar_text">
                        <p>guest@anyiris: ~</p>
                    </div>
                </div>
                <div class="terminal_output">
                    <div class="terminal_line">
                        <span class="success">➜</span> <span class="directory">~</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
<div class="post_list">
    <ul>
        <li class="post_container has_image">
            <div class="post_text">
                <div class="post_info">
                    <ul>
                        <li>2020.01.24</li>
                        <li>category</li>
                    </ul>
                </div>
                <div class="post_title">Lorem ipsum</div>
                <div class="post_content">Quis et officia anim id anim sint est tempor non id elit excepteur velit labore. Velit qui consectetur incididunt enim aliqua et laborum sint occaecat non irure nulla Lorem consectetur. Qui tempor id mollit id sunt qui irure et Lorem. Anim commodo ea enim enim voluptate adipisicing sit dolore ex quis veniam. Eiusmod elit minim veniam id amet.</div>
            </div>
            <div class="post_image">
                <img src="{{asset('assets/images/sample/negative-space-milky-way-galaxy-wallpaper.jpg')}}" width="640" height="332">
            </div>
        </li> 
        <li class="post_container">
            <div class="post_text">
                Aute anim minim amet eu excepteur. Consequat aliquip elit veniam amet ea mollit pariatur. Excepteur dolor duis proident excepteur est nisi.
            </div>
        </li>
    </ul>
</div>
</section>
</div>
@endsection