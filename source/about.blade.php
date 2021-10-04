@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My name is {{ $page->owner->name }}</p>
    
    <p>This is a showcase for all my projects outeside of github</p>
    
    <h2>Project List:</h2>
    
    <ul>
        <li><a href="https://amalkong.github.io/css-filter/">Css Filter</a></li>
    </ul>
    
    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/amalkong" target="_blank">Twitter</a></li>
        <li><a href="https://github.com/amalkong" target="_blank">GitHub</a></li>
        <li><a href="https://stackoverflow.com/users/15254982/amalkong" target="_blank">Stack Overflow</a></li>
    </ul>
@endsection
