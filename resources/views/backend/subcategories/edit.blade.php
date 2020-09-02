@extends('backendtemplate')
@section('body')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form
		</h1>
	</div>
	<div class="container">
		<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			  
			  <div class="form-group row">
			    <label for="name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="InputName" name="name" value="{{$subcategory->name}}" >
			       <span class="text-danger">{{ $errors->first('name')}}</span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="category" class="col-sm-2 col-form-label">Category</label>
			    <div class="col-sm-3">
			      <select class="form-control form-control-md" id="inputBrand" name="category" >
			      	<optgroup label="Choose Category" >
			      		@foreach($categories as $category)
			      		<option value="{{$category->id}}">{{$subcategory->category->name}}</option>
			      		@endforeach
			      	</optgroup>
			      </select>
			      <span class="text-danger">{{ $errors->first('category')}}</span>
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