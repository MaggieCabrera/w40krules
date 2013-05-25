<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Warhammer 40k</title>
	<meta name="viewport" content="width=device-width">

	{{ HTML::style('stylesheets/app.css') }}

	{{ HTML::script('javascripts/vendor/custom.modernizr.js') }}

</head>
<body>
	
	<div class="container row">
		<div class="large-12 columns">
			@yield('content')
		</div>
	</div>

	<script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
  '.js><\/script>')
  </script>
  	
	{{ HTML::script('javascripts/foundation/foundation.js') }}
	{{ HTML::script('javascripts/foundation/foundation.alerts.js') }}
	{{ HTML::script('javascripts/foundation/foundation.clearing.js') }}
	{{ HTML::script('javascripts/foundation/foundation.cookie.js') }}
	{{ HTML::script('javascripts/foundation/foundation.dropdown.js') }}
	{{ HTML::script('javascripts/foundation/foundation.forms.js') }}
	{{ HTML::script('javascripts/foundation/foundation.joyride.js') }}
	{{ HTML::script('javascripts/foundation/foundation.magellan.js') }}
	{{ HTML::script('javascripts/foundation/foundation.orbit.js') }}
	{{ HTML::script('javascripts/foundation/foundation.placeholder.js') }}
	{{ HTML::script('javascripts/foundation/foundation.reveal.js') }}
	{{ HTML::script('javascripts/foundation/foundation.section.js') }}
	{{ HTML::script('javascripts/foundation/foundation.tooltips.js') }}
	{{ HTML::script('javascripts/foundation/foundation.topbar.js') }}

  <script>
    $(document).foundation();
  </script>

</body>
</html>
