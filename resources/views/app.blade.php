<!-- Connect Vue 3 Component with Laravel blade file -->

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="crsf">
	<title>ONM Jobs</title>

	@vite('resources/css/app.css')
</head>

<body>
	<div style="background-color:white">
		<hr>

		<hr>
	</div>

	<div id="app"></div>
	<input form="jobApplication" type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
	@vite('resources/js/app.js')
</body>

</html>