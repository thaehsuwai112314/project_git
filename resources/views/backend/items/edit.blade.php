@extends('backendtemplate')
@section('body')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Edit Form
		</h1>
	</div>
	<div class="container">
		<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			  <div class="form-group row">
			    <label for="codeno" class="col-sm-2 col-form-label">Code NO</label>
			    <div class="col-sm-3">
			      <input type="text"  class="form-control" id="inputCodeno" value="{{$item->codeno}}" name="codeno" readonly="readonly">
			      <span class="text-danger">{{ $errors->first('codeno')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="InputName" name="name" value="{{$item->name}}" >
			       <span class="text-danger">{{ $errors->first('name')}}</span>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
			    <div class="col-sm-3">
			      <input type="file" class="form-control-file" id="Inputphoto" name="photo" >
			      <span class="text-danger">{{ $errors->first('photo')}}</span>
			      <img src="{{asset($item->photo)}}" class="img-fluid w-25">
			      <input type="hidden" name="oldphoto" value="{{$item->photo}}">
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="price" class="col-sm-2 col-form-label">Price</label>
			    <div class="col-sm-3">
			      <input type="number" class="form-control" id="Inputprice" name="price" value="{{$item->price}}" >
			      <span class="text-danger">{{ $errors->first('price')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="discount" class="col-sm-2 col-form-label">Discount</label>
			    <div class="col-sm-3">
			      <input type="number" class="form-control" id="Inputdiscount" value="{{$item->discount}}" name="discount">
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="description" class="col-sm-2 col-form-label">Description</label>
			    <div class="col-sm-3">
			      <textarea class="form-control"  id="Inputdescription" name="description">{{$item->description}}</textarea>
			      <span class="text-danger">{{ $errors->first('description')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="brand" class="col-sm-2 col-form-label">Brand</label>
			    <div class="col-sm-3">
			      <select class="form-control form-control-md" id="inputBrand" name="brand" >
			      	<optgroup label="Choose Brand" >
			      		@foreach($brands as $brand)
			      		<option value="{{$brand->id}}">{{$item->brand->name}}</option>
			      		@endforeach
			      	</optgroup>
			      </select>
			      <span class="text-danger">{{ $errors->first('brand')}}</span>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="subcategory" class="col-sm-2 col-form-label">Subcategory</label>
			    <div class="col-sm-3">
			      <select class="form-control form-control-md" id="inputBrand" name="subcategory" >
			      	<optgroup label="Choose Subcategory" >
			      		@foreach($subcategories as $subcategory)
			      		<option value="{{$subcategory->id}}">{{$item->subcategory->name}}</option>
			      		@endforeach
			      	</optgroup>
			      </select>
			      <span class="text-danger">{{ $errors->first('subcategory')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <div >
			      <input type="submit" class="btn btn-primary form-control" id="submit" value="Update" name="btnsubmit">
			    </div>
			  </div>
</form>
			
	</div>
</div>
@endsection