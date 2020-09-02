@extends('backendtemplate')
@section('body')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Create Form
		</h1>
	</div>
	<div class="container">
		<form action="{{route('subcategories.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			  
			  <div class="form-group row">
			    <label for="name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="InputName" name="name">
			       <span class="text-danger">{{ $errors->first('name')}}</span>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="category" class="col-sm-2 col-form-label">Category</label>
			    <div class="col-sm-3">
			      <select class="form-control form-control-md" id="inputBrand" name="category" >
			      	<optgroup label="Choose Subcategory" >
			      		@foreach($categories as $category)
			      		<option value="{{$category->id}}">{{$category->name}}</option>
			      		@endforeach
			      	</optgroup>
			      </select>
			      <span class="text-danger">{{ $errors->first('category')}}</span>
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