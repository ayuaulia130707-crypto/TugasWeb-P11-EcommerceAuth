@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <x-alert />

    <x-card>

        <h1>{{ $post->title }}</h1>

@if ($post->image)
    <img
        src="{{ asset('storage/' . $post->image) }}"
        alt="{{ $post->title }}"
        style="max-width: 500px; margin-bottom: 15px; border-radius: 8px;"
    >
@endif

<p>
    {{ $post->body }}
</p>

        <br>

        <a href="{{ route('posts.edit', $post) }}" class="button">
            Edit
        </a>

        <a href="{{ route('posts.index') }}" class="button">
            Kembali
        </a>

    </x-card>

@endsection
