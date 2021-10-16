@extends('_layouts.master')

@section('content')
    <h1>Welcome to Amalkong Development Showcase</h1>
    <p>This is basically a site dedicated to showcasing <a href="{{ $page->links->github }}">my projects</a> hosted  on Github.</p>
	
	<h2>Technology Stack</h2>
	<p>I work and experiment with a wide cross-section of web technology stacks from HTML, CSS and Javascript on the front-end/clientside <small>(including Bootstrap, Tailwind CSS, JQuery, React &amp; NodeJS)</small> to PHP and NodeJS on the back-end/severside <small>(including Wordpress, Codeigniter, Laravel &amp; Express)</small>.</p>
	
	<p>To find out more about the projects, head over to the <a href="{{ $page->baseUrl }}/projects">projects page</a> or to view demos head over to the <a href="{{ $page->baseUrl }}/about">about page</a></p>
    <!--<a href="https://ko-fi.com/Y8Y07ACJ" target="_blank" rel="noopener">
        <img src="{{ media('kofi-button.png') }}" alt="ko-fi" width="223" height="30">
    </a>-->
@endsection
