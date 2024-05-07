<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 11 CRUD Operation Tutorial </title>
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
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('shoes.create') }}"> Create
Shoe</a>
</div>
</div>
</div>@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Brand</th>
<th>Model</th>
<th>Price</th>
<th width="280px">Action</th>
</tr>
@foreach ($shoes as $shs)
<tr>
<td>{{ $shs->id }}</td>
<td>{{ $shs->brand }}</td>
<td>{{ $shs->model }}</td>
<td>{{ $shs->price }}</td>
<td>
<form action="{{ route('shoes.destroy',$shs->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('shoes.edit',$shs->id)
}}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $shoes->links('pagination::bootstrap-5') !!}
</body>
</html>