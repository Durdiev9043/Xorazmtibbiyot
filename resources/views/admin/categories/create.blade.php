@extends('admin.layouts.app')

@section('content')
    <h2>Yangi kategoriya qo‘shish</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nom (UZ)</label>
            <input type="text" name="name_uz" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nom (RU)</label>
            <input type="text" name="name_ru" class="form-control">
        </div>

        <div class="mb-3">
            <label>Nom (EN)</label>
            <input type="text" name="name_en" class="form-control">
        </div>

        <div class="mb-3">
            <label>Ota kategoriya (ixtiyoriy)</label>
            <select name="parent_id" class="form-select">
                <option value="">Ota kategoriya yo‘q</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name_uz }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Saqlash</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Bekor qilish</a>
    </form>
@endsection
