<!DOCTYPE html>
<html>
<head>
	<title>Terms</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Latest compiled and minified JS -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	{{ HTML::style('css/login.css') }}

	

</head>
<body>
<div class="container">
	
<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ route('home') }}">Terms</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="#">ENG</a></li>
			<li><a href="#">LT</a></li>
			<li><a href="{{ route('postImportFiles') }}">Import</a></li>
			<li><a href="{{ route('postMoveFiles') }}">Export</a></li>			
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		</form>
		<ul class="nav navbar-nav">			
			<li><a href="/todo">ToDo</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Login</a></li>			
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>

	<!-- end of navbar -->

</div>



<div class="container">

			@yield('content')

	</div>




<!-- Latest compiled and minified JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>