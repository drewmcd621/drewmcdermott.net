<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
	
    <script src="/js/jquery-1.11.2.min.js"></script>
	<script src="/js/jquery-ui/jquery-ui.min.js"></script>
	<!--<script src="js/jquery-mobile/jquery.mobile-1.4.5.js"></script>-->
	
    <script src="/js/bootstrap.min.js"></script>
	<script src="/js/active.js"></script>
	<script src="/js/sidebar.js"></script>

	<link href="/css/main.css" rel="stylesheet">

	@yield('head')
  </head>
  <body>
	<!-- Top bar -->
<header id='header'>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="ui-btn ui-icon-carat-r ui-btn-icon-left"></a>
          <a class="navbar-brand" href="/">Drew McDermott</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
			<li><a href="/blog">Blog</a></li>
            <li><a href="/code">Code</a></li>
            <li><a href="/glass">Glass</a></li>
			<li><a href="/photo">Photo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<!-- end Top Bar -->
</header>
<div id ='main-container'>
<div id='sidebar'>
	@yield('sidebar')
</div>
<div id='content'>
    @yield('content')
</div>
<div id="clear" style="clear:both;"></div>
</div>
<footer id='footer'>


</footer>
  </body>
</html>