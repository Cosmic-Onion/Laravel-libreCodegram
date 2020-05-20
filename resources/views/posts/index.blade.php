@extends('layouts.app')

@section('content')
<div class="container">
    @foreach( $posts as $post)
    <div class="row">
        <div class="col-8 offset-2">

            <a href="/p/{{$post->id}}"><img src="/storage/{{$post->image}}" class="w-100"></a> </div>
    </div>
    <div class="row">
        <div class="col-8 offset-2 pt-4">
            <div>

                <p>
                    <a href="/profile/{{$post->user->id}}"><img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle pr-2" style="max-width:50px;"></a>
                    {{$post->caption}}</p>

            </div>
        </div>
    </div>

    @endforeach

    <div class="row ">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}};
        </div>
    </div>


</div>
@endsection