@extends('backendtemplate')
@section('body')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Order List
		</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Voucher No</th>
      <th scope="col">User</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@php $i=1; @endphp
  	@foreach ($orders as $order)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$order->voucherno}}</td>
      <td>{{$order->user->name}}</td>
      <td>{{$order->total}}MMK</td>
      <td>
      	  <a href="{{route('orders.show',$order->id)}}" class='btn btn-info'>Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

			
	</div>
</div>
@endsection