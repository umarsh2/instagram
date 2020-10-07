Click Below Customers for Details...
<div>
	@unless(Auth::check())
		You are not signed in..
	@endunless
</div>
<ul>
@forelse($customers as $customer)
	<li><a href="{{url('/customer/')}}/{{$customer->id}}">{{$customer->name}}</a></li>
 @empty
 	No customer found
@endforelse
</ul>


<a href="{{route('customer.create')}}">Add New Customer</a>