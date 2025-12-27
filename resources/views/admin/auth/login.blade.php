@extends('admin.auth.layouts.app')
@section('content')
    <!-- Card body -->
    <div class="card-body px-4 py-4">

        <div class="text-center mb-4">
            <h4 class="fw-bold mb-1">ADMIN LOGIN</h4>
            <p class="text-muted small mb-0">Sign in to continue</p>
        </div>
        @if ($errors->any())
            <div class="invalid-feedback d-block">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" accept-charset="UTF-8">

            <!-- Email -->
            <div class="mb-3">
                <label for="emailaddress" class="form-label">Email address</label>
                <input class="form-control" type="email" id="emailaddress" name="email" value="{{ old('email') }}" required placeholder="user@example.com">
                {{-- @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror --}}
                </div>

            <!-- Password -->
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label for="password" class="form-label mb-0">Password</label>
                    <a href="#" class="small text-muted">Forgot password?</a>
                </div>

                <div class="input-group mt-1">
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter your password" required>
                    <span class="input-group-text">
                        <i class="fa-solid fa-eye"></i>
                    </span>
                </div>
            </div>
            @csrf

            <!-- Submit -->
            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary btn-lg">
                    Login
                </button>
            </div>

        </form>

    </div>
@endsection
