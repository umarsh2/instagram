@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
   <div class="col-3 p-5">
   <div class="col-9 p-5">
    <!-- @if(session()->has('api_token'))
      {{session()->get('api_token')}}
      @else
      Already Generated
    @endif -->
    {{request()->user()->api_token ?? 'Generated'}}
    <form method="POST" action="{{route('home')}}">
      @csrf
      <input type="submit"  name="submit" value="Generate Token">
    </form>
       </div>
       
       
   </div>
   </div>
</div>
@endsection
