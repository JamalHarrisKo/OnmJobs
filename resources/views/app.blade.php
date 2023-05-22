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
	@if ($errors->any())
	<div class="errorModal" style="display:none">
		<div class="errorModal__window">
			<span class="errorModal__window__closer">
				X
			</span>
			<p class="errorMoal__window__header">Leider sind foglende Probleme aufgetreten: </p>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
	@endif
	@if (\Session::has('success'))
	<div class="errorModal" style="display:none">
		<div class="errorModal__window">
			<span class="errorModal__window__closer">
				X
			</span>
			<div class="errorModal__success_message">
				<p>Vielen Dank für deine Bewerbung bei ONM!</p>
				<p>Wir werden deine Unterlagen durchgehen und uns in kürze melden.</p>
			</div>
			
			
		</div>
	</div>
@endif

	<div id="app"></div>

	<input form="jobApplication" type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}">
	@vite('resources/js/app.js')
</body>
@if($errors->any() || \Session::has('success'))
<script>
	/* move this to a different file, maybe */
	errorModalCloser = document.querySelector('.errorModal__window__closer');
	errorModal = document.querySelector('.errorModal');
	errorModalCloser.onclick = function() {
		errorModal.classList.add('errorModal__closed')
	}
	errorModal.onclick = function() {
		errorModal.classList.add('errorModal__closed')
	}
</script>
@endif

</html>