<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Form in Laravel 11 </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 11 CRUD OperationTutorial</h2>
</div>
<div class="pull-left">
<h2>Edit Shoe</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('shoes.index') }}"
enctype="multipart/form-data"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('shoes.update',$shoe->id) }}" method="POST"
enctype="multipart/form-data">
@csrf
@method('PUT')<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Brand:</strong>
<input type="text" name="brand" value="{{ $shoe->brand }}"
class="form-control" placeholder="please enter brand">
@error('brand')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Model:</strong>
<input type="text" name="model" value="{{ $shoe->model }}"
class="form-control" placeholder="Please enter model">
@error('model')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Price:</strong>
<input type="number " name="price" step="any" value="{{ $shoe->price
}}" class="form-control" placeholder="Please enter price">
@error('price')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 mt-2">
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div></div>
</form>
</div>
</body>
</html>