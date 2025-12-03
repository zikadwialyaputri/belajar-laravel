@extends('admin.layouts.app')
@section('title', 'List User')
@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l2-2m0 0l7-7m7 7V5a2 2 0 00-2-2h-3m0 0L9.5 9.5m6.5 0H12m0 0L5 12M12 6v6">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Tambah User</h1>
            <p class="mb-0">Form untuk menambahkan data user baru.</p>
        </div>

        <a href="{{ route('user.index') }}" class="btn btn-primary">
            <i class="fas fa-question-circle me-1"></i>
            Kembali
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-8">
        <div class="card border-0 shadow components-section">
            <div class="card-body">

                <!-- Error -->
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-4">

                        <!-- First Name -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" id="name" name="name"
                                    value="{{ old('name') }}"
                                    class="form-control" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" id="email" name="email"
                                    value="{{ old('email') }}"
                                    class="form-control" required>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password"
                                    name="password" value="{{ old('password') }}"
                                    class="form-control" required>
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                <input type="password" id="password_confirmation"
                                    name="password_confirmation"
                                    value="{{ old('password_confirmation') }}"
                                    class="form-control" required>
                            </div>

                            <!-- Pilih Role -->
                            <div class="mb-3">
                                <label>Pilih Role</label>
                                <select name="role" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Input Foto -->
                            <div class="mb-3">
                                <label>Foto Profil</label>
                                <input type="file" name="avatar" class="form-control">
                            </div>

                            <!-- Buttons -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('user.index') }}" class="btn btn-outline-secondary ms-2">
                                    Batal
                                </a>
                            </div>

                        </div> <!-- col -->
                    </div> <!-- row -->

                </form>

            </div> <!-- card-body -->
        </div> <!-- card -->
    </div> <!-- col -->
</div>

@endsection