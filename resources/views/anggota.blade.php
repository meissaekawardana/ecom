<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach($b as $a)
	{{$a->nama}}
		@foreach($a->hobi as $h)
			{{$h->hobi}}
		@endforeach
	@endforeach
</body>
</html>