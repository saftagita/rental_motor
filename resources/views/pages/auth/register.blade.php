@extends('layout.auth')

@section('title', 'Register')

@section('content')
<div>
    <h2>REGISTER</h2>
    
    <!-- Error Messages -->
    @if ($errors->any())
    <div style="background: #FFEBEE; color: #C62828; padding: 12px; border-radius: 8px; margin-top: 15px; font-size: 14px;">
            @foreach ($errors->all() as $error)
            <p style="margin: 5px 0;">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    <!-- FORM REGISTER -->
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        
        <!-- NAMA -->
        <label>Nama Lengkap</label>
        <input type="text" name="name" class="input-box" placeholder="Masukkan Nama Lengkap" required>

        <!-- EMAIL -->
        <label>Email</label>
        <input type="email" name="email" class="input-box" placeholder="Masukkan Email" required>

        <!-- PASSWORD -->
        <label>Password</label>
        <input type="password" name="password" class="input-box" placeholder="Masukkan Password" required>

        <!-- BUTTON SUBMIT -->
        <button type="submit" class="btn-submit">KONFIRMASI DAFTAR</button>
    </form>
    <a href="{{ route('login.form') }}">Sudah punya akun? Login di sini</a>
</div>
    
@endsection