@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Postni tahrirlash</h2>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Category --}}
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategoriya</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <optgroup label="{{ $category->name_uz }}">
                            @foreach($category->subcategories as $sub)
                                <option value="{{ $sub->id }}" {{ $post->category_id == $sub->id ? 'selected' : '' }}>
                                    {{ $sub->name_uz }}
                                </option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>

            {{-- Titles --}}
            <div class="row">
                <div class="col-md-4">
                    <label>Title (UZ)</label>
                    <input type="text" name="title_uz" class="form-control" value="{{ $post->title_uz }}" required>
                </div>
                <div class="col-md-4">
                    <label>Title (EN)</label>
                    <input type="text" name="title_en" class="form-control" value="{{ $post->title_en }}">
                </div>
                <div class="col-md-4">
                    <label>Title (RU)</label>
                    <input type="text" name="title_ru" class="form-control" value="{{ $post->title_ru }}">
                </div>
            </div>

            {{-- Bodies --}}
            <div class="row mt-3">
                <div class="col-md-4">
                    <label>Body (UZ)</label>
                    <textarea name="content_uz" rows="4" class="form-control">{{ $post->content_uz }}</textarea>
                </div>
                <div class="col-md-4">
                    <label>Body (EN)</label>
                    <textarea name="content_en" rows="4" class="form-control">{{ $post->content_en }}</textarea>
                </div>
                <div class="col-md-4">
                    <label>Body (RU)</label>
                    <textarea name="content_ru" rows="4" class="form-control">{{ $post->content_ru }}</textarea>
                </div>
            </div>

            {{-- Current Images --}}
            <div class="mt-4">
                <label>Yuklangan rasmlar:</label>
                <div class="d-flex flex-wrap gap-2">
                    @foreach($post->images as $image)
                        <div style="position:relative;">
                            <img src="{{ asset('storage/posts/' . $image->filename) }}" alt="" width="100">
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Upload new images --}}
            <div class="mt-3">
                <label>Yangi rasm(lar) yuklash (ixtiyoriy)</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>

            {{-- Status --}}
            <div class="mt-3">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option value="active" {{ $post->status == 'active' ? 'selected' : '' }}>Faol</option>
                    <option value="inactive" {{ $post->status == 'inactive' ? 'selected' : '' }}>Nofaol</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Saqlash</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-4">Orqaga</a>
        </form>
    </div>
@endsection
