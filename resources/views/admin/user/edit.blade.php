@extends('admin.layouts.app')
@section('title', 'Edit User')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Edit User</h1>
            <p class="mb-0">Form untuk mengubah data user.</p>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-primary">
                <i class="far fa-arrow-alt-circle-left me-1"></i> Kembali
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">

                {{-- Flash message sukses --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- Pesan error validasi --}}
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('user.update', $dataUser->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ old('name', $dataUser->name) }}" required maxlength="100">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ old('email', $dataUser->email) }}" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="mb-3">
                                <label for="password" class="form-label">Password (kosongkan jika tidak diubah)</label>
                                <input type="password" name="password" id="password" class="form-control" minlength="8">
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" minlength="8">
                            </div>

                            <div>
                                <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                <a href="{{ route('user.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection