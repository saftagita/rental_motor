@extends('layout.auth')

@section('title', 'Login')

@section('content')
<div>
    <h2>LOGIN</h2>

    <!-- Error Messages -->
    @if ($errors->any())
        <div style="background: #FFEBEE; color: #C62828; padding: 12px; border-radius: 8px; margin-top: 15px; font-size: 14px;">
            @foreach ($errors->all() as $error)
                <p style="margin: 5px 0;">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <!-- FORM LOGIN -->
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        
        <!-- EMAIL -->
        <label>Email</label>
        <input type="email" name="email" class="input-box" placeholder="Masukkan Email" required>

        <!-- PASSWORD -->
        <label>Password</label>
        <input type="password" name="password" class="input-box" placeholder="Masukkan Password" required>

        <!-- BUTTON SUBMIT -->
        <button type="submit" class="btn-submit">KONFIRMASI MASUK</button>
    </form>
    <a href="{{ route('register.form') }}">Belum punya akun? Daftar di sini</a>
</div>
@endsection