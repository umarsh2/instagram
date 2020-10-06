Click Below Customers for Details...
<ul>
@forelse($customers as $customer)
	<li><a href="{{url('/customer/')}}/{{$customer->id}}">{{$customer->name}}</a></li>
 @empty
 	No customer found
@endforelse
</ul>


<a href="{{url('/customer/create')}}">Add New Customer</a>