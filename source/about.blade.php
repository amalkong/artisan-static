@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h2>About</h2>

    <p>Hey there, my name is <strong>{{ $page->owner->name }}</strong> and I am a web developer from the island of <strong>Jamaica</strong>. Been doing this a couple years now and I wouldn't say i'm an expert or nothing like that, but I can say confidently say that I know a thing or two.</p>
    
    <p>Heres a list of some of <a href="https://github.com/amalkong" target="_blank">my projects</a> hosted on <a href="https://github.com" target="_blank">github</a>.</p>
    
	<div class="panel">
		<h3>Project List:</h3>
		<ul>
			<li><a href="https://github.com/amalkong/css-filter">Css Filter Repo</a> - <a href="https://amalkong.github.io/css-filter/" target="_blank">demo</a></li>
			<li><a href="https://github.com/amalkong/mashups">The Mashup Projects Repo</a> - <a href="https://amalkong.github.io/mashups/" target="_blank">demo</a></li>
		</ul>
	</div>
    
	
    <div class="panel">
		<h3>Links:</h3>
		<ul>
			<li><a href="{{ $page->links->twitter }}" title="view twitter profile" target="_blank"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
			<li><a href="{{ $page->links->github }}" title="view github profile" target="_blank"><i class="fab fa-github"></i><span>GitHub</span></a></li>
			<li><a href="{{ $page->links->stackoverflow }}" title="view stack-overflow profile" target="_blank"><i class="fab fa-stack-overflow"></i><span>Stack Overflow</span></a></li>
		</ul>
	</div>
@endsection
