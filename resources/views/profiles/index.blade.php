@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_ohc=1g9woUWsBWsAX96ru1q&oh=8ea871130f3e03f5287d752433579633&oe=5EE99F46" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>25k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold" >{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-15/e35/c95.0.559.559a/96936602_574334026620306_7948073701358189323_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_cat=106&_nc_ohc=rCyzyyhzlVkAX9kDUBX&oh=e93b0ec005ee6c4315d3c3882eebcdc1&oe=5EEAD222" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.23.730.730a/s640x640/96823965_1408350016016174_6558000491988366869_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_cat=102&_nc_ohc=A5nb-UREq4cAX8APrOl&oh=09565adace037c21b92d2071db2412a0&oe=5EEAD0EC" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-lht6-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.56.849.849a/s640x640/96936602_865468200615953_5556357876951389968_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&_nc_cat=105&_nc_ohc=xACgkOnATbwAX_6WRpj&oh=6f4b598b9cb940968608e5192af463e0&oe=5EE96706" alt="" class="w-100">
        </div>
    </div>

</div>
@endsection
