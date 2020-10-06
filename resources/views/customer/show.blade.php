@if($customer)
<div style="width:400px; margin:100 auto;">
<h1>Customer Details... </h1>

<div>
<h3>{{$customer->name}}</h3>
</div>
<div>
<h3>{{$customer->email}}</h3>
</div>
<div>
<img src="{{asset('storage/'.$customer->image)}}" />
</div>
<a href="{{url('/customer')}}">Back</a><br>
<a href="{{url('/customer')}}/{{$customer->id}}/edit">Edit Customer</a>
<form method="POST" action="{{url('/customer')}}/{{$customer->id}}">
	@csrf
	@method('DELETE')
	<button type="submit">Delete Customer</button>
	
</form>


</div>
	@else
	<div>
	This customer doesn't exists...
	</div>
	<a href="{{url('/customer')}}">Back</a>
@endif
