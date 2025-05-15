@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Bosh sahifa</h1>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-folder2-open display-4 text-primary"></i>
                        <h5 class="mt-2">Kategoriyalar</h5>
                        <a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary mt-2">Ko‘rish</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-journal-text display-4 text-success"></i>
                        <h5 class="mt-2">Yangiliklar</h5>
                        <a href="{{ route('posts.index') }}" class="btn btn-sm btn-success mt-2">Ko‘rish</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-person-circle display-4 text-warning"></i>
                        <h5 class="mt-2">Profil</h5>
                        <a href="#" class="btn btn-sm btn-warning mt-2">Sozlamalar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
