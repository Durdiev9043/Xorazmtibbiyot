@extends('admin.layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Kategoriyalar</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Yangi kategoriya</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nom (UZ)</th>
            <th>Yaratilgan vaqti</th>
            <th>Amallar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name_uz }}</td>
                <td>{{ $category->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">Tahrirlash</a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('O‘chirishni istaysizmi?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">O‘chirish</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
@endsection
