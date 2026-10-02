@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <x-alert />

    <h1>Edit Post</h1>

    <x-card>

        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <label for="title">Judul</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $post->title) }}"
            >

            @error('title')
                <div style="color: #b00020; margin-top: -10px; margin-bottom: 15px;">
                    {{ $message }}
                </div>
            @enderror

            <label for="body">Isi Post</label>
            <textarea
                id="body"
                name="body"
            >{{ old('body', $post->body) }}</textarea>

            @error('body')
                <div style="color: #b00020; margin-top: -10px; margin-bottom: 15px;">
                    {{ $message }}
                </div>
            @enderror

            @if ($post->image)
                <div style="margin-bottom: 15px;">
                    <p>Gambar saat ini:</p>

                    <img
                        src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->title }}"
                        style="max-width: 250px; border-radius: 8px;"
                    >
                </div>
            @endif

            <label for="image">Ganti Gambar</label>
            <input
                type="file"
                id="image"
                name="image"
                accept="image/*"
            >

            @error('image')
                <div style="color: #b00020; margin-top: -10px; margin-bottom: 15px;">
                    {{ $message }}
                </div>
            @enderror

            <button type="submit" class="button">
                Simpan Perubahan
            </button>

            <a href="{{ route('posts.show', $post) }}" class="button">
                Batal
            </a>

        </form>

    </x-card>

@endsection
