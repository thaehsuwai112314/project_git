@extends('backendtemplate')
@section('body')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form
		</h1>
	</div>
	<div class="container">
		<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			  <div class="form-group row">
			    <label for="codeno" class="col-sm-2 col-form-label">Code NO</label>
			    <div class="col-sm-3">
			      <input type="text"  class="form-control" id="inputCodeno" value="" name="codeno">
			      <span class="text-danger">{{ $errors->first('codeno')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="InputName" name="name">
			       <span class="text-danger">{{ $errors->first('name')}}</span>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
			    <div class="col-sm-3">
			      <input type="file" class="form-control-file" id="Inputphoto" name="photo">
			      <span class="text-danger">{{ $errors->first('photo')}}</span>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="price" class="col-sm-2 col-form-label">Price</label>
			    <div class="col-sm-3">
			      <input type="number" class="form-control" id="Inputprice" name="price">
			      <span class="text-danger">{{ $errors->first('price')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="discount" class="col-sm-2 col-form-label">Discount</label>
			    <div class="col-sm-3">
			      <input type="number" class="form-control" id="Inputdiscount" value="0" name="discount">
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="description" class="col-sm-2 col-form-label">Description</label>
			    <div class="col-sm-3">
			      <textarea class="form-control"  id="Inputdescription" name="description"></textarea>
			      <span class="text-danger">{{ $errors->first('description')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="brand" class="col-sm-2 col-form-label">Brand</label>
			    <div class="col-sm-3">
			      <select class="form-control form-control-md" id="inputBrand" name="brand">
			      	<optgroup label="Choose Brand">
			      		@foreach($brands as $brand)
			      		<option value="{{$brand->id}}">{{$brand->name}}</option>
			      		@endforeach
			      	</optgroup>
			      </select>
			      <span class="text-danger">{{ $errors->first('brand')}}</span>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="subcategory" class="col-sm-2 col-form-label">Subcategory</label>
			    <div class="col-sm-5">
			      <select class="form-control form-control-md" id="inputBrand" name="subcategory">
			      	<optgroup label="Choose Subcategory">
			      		@foreach($subcategories as $subcategory)
			      		<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
			      		@endforeach
			      	</optgroup>
			      </select>
			      <span class="text-danger">{{ $errors->first('subcategory')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <div >
			      <input type="submit" class="btn btn-primary form-control" id="submit" value="Create" name="btnsubmit">
			    </div>
			  </div>
</form>
			
	</div>
</div>
@endsection