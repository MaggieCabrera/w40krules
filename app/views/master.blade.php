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

	<nav class="top-bar">
	  <ul class="title-area">
	    <!-- Title Area -->
	    <li class="name">
	      <h1><a href="#">Warhammer 40k Rules </a></h1>
	    </li>
	    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	  </ul>

	  <section class="top-bar-section">
	    <!-- Left Nav Section -->
	    <ul class="left">
	      <li class="divider"></li>
	      <li class="active"><a href="#">Main Item 1</a></li>
	      <li class="divider"></li>
	      <li><a href="#">Main Item 2</a></li>
	      <li class="divider"></li>
	      <li class="has-dropdown"><a href="#">Main Item 3</a>

	        <ul class="dropdown">
	          <li class="has-dropdown"><a href="#">Dropdown Level 1a</a>

	            <ul class="dropdown">
	              <li><label>Dropdown Level 2 Label</label></li>
	              <li><a href="#">Dropdown Level 2a</a></li>
	              <li><a href="#">Dropdown Level 2b</a></li>
	            </ul>
	          </li>
	          <li><a href="#">Dropdown Level 1b</a></li>
	          <li><a href="#">Dropdown Level 1c</a></li>
	        </ul>
	      </li>
	      <li class="divider"></li>
	    </ul>

	  </section>
	</nav>
	
	<div class="container row">
		<div class="large-12 columns">
			@yield('content')
		</div>
	</div>

	<!--<script>
		document.write('<script src=' +
		('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
		'.js><\/script>')
		console.log('<script src=' +
		('__proto__' in {} ? 'javascripts/vendor/zepto' : 'javascripts/vendor/jquery') +
		'.js><\/script>');
	</script>-->
	{{ HTML::script('javascripts/vendor/jquery.js') }}
  	
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
