<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>
			@yield('title')
			{{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
			{{ $page->site->title }}
		</title>

		@include('_partials.head.favicon')
		@include('_partials.head.meta')
		@include('_partials.cms.identity_widget')
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Tangerine|Varela+Round|Source+Sans+Pro|Open+Sans|Lato&display=swap" />
		<!-- 
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		-->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous"/>
		
		<link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
	</head>
	<body>
		<section>
			<header>
				<ul>
					<li><a href="{{ $page->links->twitter }}" title="view twitter profile" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a href="{{ $page->links->github }}" title="view github profile" target="_blank"><i class="fab fa-github"></i></a></li>
					<li><a href="{{ $page->links->stackoverflow }}" title="view stack-overflow profile" target="_blank"><i class="fab fa-stack-overflow"></i></a></li>
				</ul>
				<h1><span>{{ $page->site->title }}</span></h1>
			</header>
			
			@include('_partials.menu')
			
			<article>
				<section class="content-body">
					@yield('content')
				</section>
			</article>

			<footer>
				<small>
					&copy; <span data-year></span> {{ $page->owner->name }} &nbsp;&bull;&nbsp;
					<a href="/feed.atom">RSS</a> &nbsp;&bull;&nbsp;
					Maintained by Ranie Santos &nbsp;&bull;&nbsp;
					<a href="https://github.com/raniesantos/artisan-static">GitHub repo</a>
				</small>
			</footer>
		</section>

		<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
		@includeWhen($page->production && $page->services->analytics, '_partials.analytics')
		@include('_partials.cms.identity_redirect')
	</body>
</html>