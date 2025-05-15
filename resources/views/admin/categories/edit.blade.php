@extends('admin.layouts.app')

@section('content')
    <h2>{{ $category->name_uz }} kategoriyasini tahrirlash</h2>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nom (UZ)</label>
            <input type="text" name="name_uz" class="form-control" value="{{ $category->name_uz }}" required>
        </div>

        <div class="mb-3">
            <label>Nom (RU)</label>
            <input type="text" name="name_ru" class="form-control" value="{{ $category->name_ru }}">
        </div>

        <div class="mb-3">
            <label>Nom (EN)</label>
            <input type="text" name="name_en" class="form-control" value="{{ $category->name_en }}">
        </div>

        <div class="mb-3">
            <label>Ota kategoriya (ixtiyoriy)</label>
            <select name="parent_id" class="form-select">
                <option value="">Ota kategoriya yo‘q</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" @selected($category->parent_id == $cat->id)>{{ $cat->name_uz }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Yangilash</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Bekor qilish</a>
    </form>
@endsection
