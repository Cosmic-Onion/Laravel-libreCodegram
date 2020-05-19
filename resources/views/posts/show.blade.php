@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="/storage/{{$post->user->profile->image}}" class="w-100 rounded-circle" style="max-width:50px;">
                    </div>

                    <div>
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark">
                                {{$post->user->username}}
                            </span>
                        </a>
                        <a href="#" class="pr-3">Follow</a>
                    </div>
                </div>

                <hr>
                <p> {{$post->caption}}</p>
            </div>
        </div>
    </div>


</div>
@endsection