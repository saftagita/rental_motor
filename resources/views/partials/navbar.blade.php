<style>
    /* NAVBAR */
    .navbar {
        background: #0F1B33;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px 60px;
        height: 70px;
        box-sizing: border-box;
        position: relative;
    }

    .logo {
        position: absolute;
        left: 60px;
    }

    .logo img {
        width: 90px;
        object-fit: contain;
    }

    .menu {
        display: flex;
        gap: 35px;
    }

    .menu a {
        color: white;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        transition: 0.3s;
    }

    .menu a:hover {
        color: #FFD95A;
    }

    .btn-logout {
        color: white;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        padding: 12px 20px;
        border-radius: 8px;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(255, 255, 255, 0.05);
    }

    .btn-logout:hover {
        background: #dc3545;
        transform: translateX(5px);
    }
</style>

{{-- NAVBAR --}}
<div class="navbar">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
    </div>

    <div class="menu">
        <a href="/home" >HOME</a>
        <a href="/product">PRODUCT</a>
        <a href="/about">ABOUT</a>
        <a href="/contact">CONTACT</a>
    </div>

    @auth
        <div class="menu" style="position: absolute; right: 60px;">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn-logout" type="submit">Logout</button>
            </form>
        </div>
    @endauth
</div>