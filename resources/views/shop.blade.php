<!DOCTYPE html>
<html>
<head>
<title>Laravel Add To Shopping Cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<div class="container">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#">Cairocoders</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="{{ url('/home') }}">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">About</a>
</li>
</ul>
<a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
</a>
</div>
</nav>
<div class="container mt-4">
<h2 class="mb-3">Laravel Add To Shopping Cart</h2>
@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div> 
@endif
@yield('content')
</div>

@yield('scripts')
</body>
</html>