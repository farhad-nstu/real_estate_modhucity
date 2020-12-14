<!DOCTYPE html>
<html>
<head>
	<title>Test mail</title>
</head>
<body>
	<p>Hello <span>{{ $content['name'] }}</span> &nbsp; {{ $content['message'] }}</p>
	<img src="http://localhost/modhu/public/assets/frontEnd/images/test.jpg">
	<!-- <img src="{{ asset('http://localhost/modhu/public/assets/frontEnd/images/test.jpg') }}" alt="alt here" width="200"> -->
</body>
</html>