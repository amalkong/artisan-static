@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h2>About</h2>

    <p>My name is {{ $page->owner->name }}, a web developer from the island of Jamaica.</p>
    
    <p>This is a showcase for all <a href="https://github.com/amalkong">my projects</a> outside of github.</p>
    
	<div class="panel">
		<h3>Project List:</h3>
		<ul>
			<li><a href="https://github.com/amalkong/css-filter">Css Filter Repo</a> - <a href="https://amalkong.github.io/css-filter/" target="_blank">demo</a></li>
			<li><a href="https://github.com/amalkong/mashups/traversy_media_mashup/index.html">Traversy Mashups Repo</a> - <a href="https://amalkong.github.io/mashups/traversy_media_mashup/index.html" target="_blank">demo</a></li>
		</ul>
	</div>
    
	
    <div class="panel">
		<h3>Links:</h3>
		<ul>
			<li><a href="{{ $page->links->twitter }}" title="view twitter profile" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
			<li><a href="{{ $page->links->github }}" title="view github profile" target="_blank"><i class="fa fa-github"></i><span>GitHub</span></a></li>
			<li><a href="{{ $page->links->stackoverflow }}" title="view stack-overflow profile" target="_blank"><i class="fa fa-stack-overflow"></i><span>Stack Overflow</span></a></li>
		</ul>
	</div>
@endsection
