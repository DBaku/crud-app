<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Shoe Form in Laravel 11 </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 11 CRUD Operation Example Tutorial </h2>
</div>
<div class="pull-left mb-2">
<h2>Add Shoe</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('shoes.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('shoes.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row"><div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Brand:</strong>
<input type="text" name="brand" class="form-control" placeholder="Brand">
@error('brand')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Model:</strong>
<input type="text" name="model" class="form-control" placeholder="Model">
@error('model')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Price:</strong>
<input type="number" name="price" step="any" class="form-control"
placeholder="Price">
@error('price')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 mt-2">
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</div>
</form>
</body>
</html>