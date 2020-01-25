@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 p-5">
        <img src="https://s4827.pcdn.co/wp-content/uploads/2016/05/Instagram_new_icon.jpg" alt="">
      </div>
      <div class="col-sm-12 col-md-6 col-lg-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create" class="btn btn-primary">Add new Post</a>
            </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? 'N/A' }}</div>
            <div>{{ $user->profile->description ?? 'N/A' }}</div>
            <div><a href="#">{{ $user->profile->url  ?? 'N/A'}}</a></div>
        </div>
  </div>


<div class="row pb-4">
    @foreach ($user->posts as $post)
        
        <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
            <a href="#">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="">
            </a>
        </div>
        
    @endforeach
</div>

</div>
@endsection
