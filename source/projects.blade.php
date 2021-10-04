@extends('_layouts.master')

@section('title', 'Projects')

@section('content')
    <h1>Projects/Repos</h1>

    <ul>
        @forelse ($projects->sortBy('title') as $project)
            <li>
                <a href="{{ $project->getPath() }}">{{ $project->title }}</a>
                <small>{{ $project->prettyDate() }}</small>
            </li>
        @empty
            <p>No projects to show.</p>
        @endforelse
    </ul>
@endsection
