@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <x-alert />

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h1>Daftar Post</h1>

    <a href="{{ route('posts.create') }}" class="button">
        + Tambah Post
    </a>
</div>

<form action="{{ route('posts.index') }}" method="GET" style="margin-bottom: 20px;">
    <input
        type="text"
        name="search"
        value="{{ $search }}"
        placeholder="Cari berdasarkan judul atau isi post..."
    >

    <button type="submit" class="button">
        Cari
    </button>

    @if ($search)
        <a href="{{ route('posts.index') }}" class="button">
            Reset
        </a>
    @endif
</form>

    @forelse ($posts as $post)

        <x-card>

            <h2>{{ $post->title }}</h2>

            <p>
                {{ Str::limit($post->body, 150) }}
            </p>

            <a href="{{ route('posts.show', $post) }}" class="button">
                Lihat Detail
            </a>

            <a href="{{ route('posts.edit', $post) }}" class="button">
                Edit
            </a>

            <form action="{{ route('posts.destroy', $post) }}"
                  method="POST"
                  style="display: inline;">

                @csrf
                @method('DELETE')

                <button type="submit" class="button button-danger"
                        onclick="return confirm('Yakin ingin menghapus post ini?')">
                    Hapus
                </button>

            </form>

        </x-card>

    @empty

        <x-card>
            <p>Belum ada post.</p>
        </x-card>

    @endforelse

    {{ $posts->links() }}

@endsection
