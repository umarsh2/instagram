@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
   <div class="col-3 p-5">
    <img src="https://scontent-ams4-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-ams4-1.cdninstagram.com&_nc_ohc=4xEg21iaFwkAX_HarSg&oh=33939ed5278871fa19d67f78349b0b1d&oe=5F99DCE7" class="rounded-circle">
   </div>
   <div class="col-9 p-5">
      <div class="d-flex justify-content-between allign-items-baseline">
        <div><h1> {{ $user->username }} </h1></div>
        {{dd($user)}}
        <button class="btn btn-primary ml-4 follow-button">{{$follow}}</button>
        <a href="{{url('/p/create')}}">Add New Post</a>
      </div>
        <a href="{{url('/profile/').'/'.$user->id.'/edit'}}">Edit Profile</a>
       <div class="d-flex">
           <div class="pr-4"><strong>{{$user->posts->count()}}</strong> posts</div>
           <div class="pr-4"><strong>23k</strong> followers</div>
           <div class="pr-4"><strong>212</strong> following</div>
       </div>
       <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
       <div>{{$user->profile->description}}</div>
       <div><a href="instagram.com">{{$user->profile->url}}</a></div>

       <div class="row pt-4">
        @foreach($user->posts as $post)
          <div class="col-4 pr-4">
            <img src="{{asset('storage/'.$post->image)}}" width="400" height="400">
            <p>{{$post->caption}}</p>
          </div>
        @endforeach
       </div>
       
       
   </div>
   </div>
</div>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>
<script>
         jQuery(document).ready(function(){
            jQuery('.follow-button').click(function(e){
               e.preventDefault();
               jQuery.ajax({
                  url: "{{ url('/follow/1') }}",
                  method: 'get',
                  data: {
                  },
                  success: function(result){
                    if(result['attached'] == '1')
                     var test = $('.follow-button').text("Unfollow");
                   else
                    var test = $('.follow-button').text("Follow");
                  }});
               });
            });
</script>
@endsection

