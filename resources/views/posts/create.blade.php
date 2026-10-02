@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')

    <x-alert />

    <h1>Tambah Post</h1>

    <x-card>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <label for="title">Judul</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
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
            >{{ old('body') }}</textarea>

            @error('body')
                <div style="color: #b00020; margin-top: -10px; margin-bottom: 15px;">
                    {{ $message }}
                </div>
            @enderror

            <label for="image">Gambar</label>
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
                Simpan
            </button>

            <a href="{{ route('posts.index') }}" class="button">
                Kembali
            </a>

        </form>

    </x-card>

@endsection
