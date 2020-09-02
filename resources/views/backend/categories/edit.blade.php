@extends('backendtemplate')
@section('body')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Edit Form
		</h1>
	</div>
	<div class="container">
		<form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			 
			  <div class="form-group row">
			    <label for="name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-3">
			      <input type="text" class="form-control" id="InputName" name="name" value="{{$category->name}}" >
			       <span class="text-danger">{{ $errors->first('name')}}</span>
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
			    <div class="col-sm-3">
			      <input type="file" class="form-control-file" id="Inputphoto" name="photo" >
			      <span class="text-danger">{{ $errors->first('photo')}}</span>
			      <img src="{{asset($category->photo)}}" class="img-fluid w-25">
			      <input type="hidden" name="oldphoto" value="{{$category->photo}}">
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