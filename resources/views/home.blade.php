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
        <a href="#">Add New Post</a>
      </div>
       
       <div class="d-flex">
           <div class="pr-4"><strong>153</strong> posts</div>
           <div class="pr-4"><strong>23k</strong> followers</div>
           <div class="pr-4"><strong>212</strong> following</div>
       </div>
       <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
       <div>{{$user->profile->description}}</div>
       <div><a href="instagram.com">{{$user->profile->url}}</a></div>

       <div class="row pt-4">
          <div class="col-4 pr-4">
            <img alt="Photo by freeCodeCamp.org on September 24, 2020. Image may contain: screen, table and indoor." class="FFVAD w-100" decoding="auto" sizes="293px" srcset="https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s150x150/120140619_3292667074102704_7427069057961941646_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=ZVXcVIbSGREAX_L6PFx&amp;_nc_tp=16&amp;oh=3073ea4f7fb93d3cde0bb5b97214487d&amp;oe=5F9A8B4B 150w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s240x240/120140619_3292667074102704_7427069057961941646_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=ZVXcVIbSGREAX_L6PFx&amp;_nc_tp=16&amp;oh=54ae4f1071054597f4ffb4985f2b6d94&amp;oe=5F981883 240w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s320x320/120140619_3292667074102704_7427069057961941646_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=ZVXcVIbSGREAX_L6PFx&amp;_nc_tp=16&amp;oh=12191a3b25b158f85cb9ef43ebd163b8&amp;oe=5F99A5DE 320w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s480x480/120140619_3292667074102704_7427069057961941646_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=ZVXcVIbSGREAX_L6PFx&amp;_nc_tp=16&amp;oh=5807c03403ef815f8e53e4c35df60f7b&amp;oe=5F9A1120 480w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/120140619_3292667074102704_7427069057961941646_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=ZVXcVIbSGREAX_L6PFx&amp;oh=111e6f39c199379faa485655483a54f2&amp;oe=5F9ABCB5 640w" src="https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/120140619_3292667074102704_7427069057961941646_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=ZVXcVIbSGREAX_L6PFx&amp;oh=111e6f39c199379faa485655483a54f2&amp;oe=5F9ABCB5" style="object-fit: cover;">
          </div>
          <div class="col-4 pr-4">
            <img alt="Photo by freeCodeCamp.org on September 22, 2020." class="FFVAD w-100" decoding="auto" sizes="293px" srcset="https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.745.745a/s150x150/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Jg-O98zWQIsAX9uZStL&amp;_nc_tp=16&amp;oh=e53007f3087a8b4279a1d0c301e24bcb&amp;oe=5F9A72B7 150w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.745.745a/s240x240/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Jg-O98zWQIsAX9uZStL&amp;_nc_tp=16&amp;oh=fa11ce464862ab0268dfbf769eeb9a51&amp;oe=5F9A5B31 240w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.745.745a/s320x320/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Jg-O98zWQIsAX9uZStL&amp;_nc_tp=16&amp;oh=0dece5af484d06f0e48413eb755ae9e2&amp;oe=5F986B4F 320w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c2.0.745.745a/s480x480/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Jg-O98zWQIsAX9uZStL&amp;_nc_tp=16&amp;oh=a283de1766357e5c991c8815a6d1c972&amp;oe=5F98BD8A 480w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Jg-O98zWQIsAX9uZStL&amp;oh=6a7f541d91c30292d3ff3f8d8b4d22d9&amp;oe=5F995861 640w" src="https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Jg-O98zWQIsAX9uZStL&amp;oh=6a7f541d91c30292d3ff3f8d8b4d22d9&amp;oe=5F995861" style="object-fit: cover;">
          </div>
          <div class="col-4 pr-4">
            <img alt="Photo by freeCodeCamp.org on September 17, 2020. Image may contain: people sitting, screen, office, table and indoor." class="FFVAD w-100" decoding="auto" sizes="293px" srcset="https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s150x150/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Ffi7F8r29L4AX8rkF9c&amp;_nc_tp=16&amp;oh=3b581ba4b0e1a5db9aad8e1e0432c45f&amp;oe=5F971895 150w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s240x240/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Ffi7F8r29L4AX8rkF9c&amp;_nc_tp=16&amp;oh=0ad91f49680c4d68d72d81e0dba2ed8d&amp;oe=5F9A4B93 240w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s320x320/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Ffi7F8r29L4AX8rkF9c&amp;_nc_tp=16&amp;oh=a764bf5bd5445c49ec01727239c1bd12&amp;oe=5F992C6D 320w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.113.931.931a/s480x480/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Ffi7F8r29L4AX8rkF9c&amp;_nc_tp=16&amp;oh=0339dd6292e59bdeb672197164e1230d&amp;oe=5F9735AC 480w,https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Ffi7F8r29L4AX8rkF9c&amp;oh=8995895636dc1e38da7d98eaabfe02d8&amp;oe=5F994554 640w" src="https://instagram.flhe6-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.flhe6-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=Ffi7F8r29L4AX8rkF9c&amp;oh=8995895636dc1e38da7d98eaabfe02d8&amp;oe=5F994554" style="object-fit: cover;">
          </div>
       </div>
       
       
   </div>
   </div>
</div>
@endsection
