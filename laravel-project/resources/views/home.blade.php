<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<a href="/chi-siamo">vai ad chi siamo</a>
	<h1>Nome: {{ $nome }}</h1>
	

	@if ($cognome != '')
		<div>
			<h1> Cognome: {{ $cognome }}</h1>
		</div>
	@endif

	@foreach ($amici as $friend)
		<h2>{{ $friend }}:</h2>
	@endforeach
</body>
</html>