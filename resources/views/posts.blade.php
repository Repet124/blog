@extends('components.layout')

@section('content')

@include('_posts-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
	@if($posts -> count())

		<x-posts-grid :posts="$posts"/>

	@else
		<p class="text-center">No posts yet. Please check back letter.</p>
	@endif
</main>


{{-- 	@foreach ($posts as $post)
		<article>
			<h1>
				<a href="/posts/{{ $post -> slug }}"> {{ $post -> title }}</a>
			</h1>

			<p>
				By 
				<a href="/author/{{ $post -> author -> username }}">{{ $post -> author -> name }}</a> 
				in 
				<a href="/catigories/{{ $post -> catigory -> slug }}">{{ $post -> catigory -> name }}</a>
			</p>

			<p>{{ $post -> excerpt }}</p>
		</article>
	@endforeach --}}

@endsection