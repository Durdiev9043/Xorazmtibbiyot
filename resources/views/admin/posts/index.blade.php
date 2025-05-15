@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Postlar</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Yangi post</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Sarlavha (UZ)</th>
            <th>Rasmlar</th>
            <th>Kategoriya</th>
            <th>Amallar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title_uz }}</td>
                <td>
                    @foreach($post->images as $img)
                        <img src="{{ asset('storage/' . $img->image) }}" width="60" class="me-1 mb-1 rounded shadow-sm">
                    @endforeach
                </td>
                <td>{{ $post->category->name_uz ?? '-' }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Tahrirlash</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('O‘chirishni istaysizmi?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">O‘chirish</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection
