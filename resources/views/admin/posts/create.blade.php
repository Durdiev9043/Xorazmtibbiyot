@extends('admin.layouts.app')

@section('content')
    <h2>Yangi post qo‘shish</h2>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Kategoriya</label>
            <select name="category_id" class="form-select">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name_uz }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Sarlavha (UZ)</label>
            <input type="text" name="title_uz" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Matn (UZ)</label>
            <textarea name="content_uz" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label>Sarlavha (RU)</label>
            <input type="text" name="title_ru" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Matn (RU)</label>
            <textarea name="content_ru" class="form-control" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label>Sarlavha (EN)</label>
            <input type="text" name="title_en" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Matn (EN)</label>
            <textarea name="content_en" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label>Rasmlar (maks. 5 ta):</label>
            <input type="file" name="images[]" multiple class="form-control" accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">Saqlash</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Bekor qilish</a>
    </form>
@endsection
