<style>
    /* SIDEBAR */
    .sidebar {
        background: #0F1B33;
        width: 260px;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        display: flex;
        flex-direction: column;
        padding: 25px 0;
        box-sizing: border-box;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar-logo {
        padding: 0 25px 30px 25px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 30px;
        text-align: center;
    }

    .sidebar-logo img {
        width: 120px;
        object-fit: contain;
    }

    .sidebar-menu {
        display: flex;
        flex-direction: column;
        gap: 5px;
        padding: 0 15px;
    }

    .sidebar-menu a {
        color: white;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        padding: 15px 20px;
        border-radius: 8px;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .sidebar-menu a:hover {
        background: rgba(255, 217, 90, 0.1);
        color: #FFD95A;
        transform: translateX(5px);
    }

    .sidebar-menu a.active {
        background: #FFD95A;
        color: #0F1B33;
    }

    .sidebar-menu a i {
        width: 20px;
        text-align: center;
        font-size: 18px;
    }

    .sidebar-footer {
        margin-top: auto;
        padding: 20px 25px;
        border-top: 2px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-footer .btn-logout {
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

    .sidebar-footer .btn-logout:hover {
        background: #dc3545;
        transform: translateX(5px);
    }

    /* CONTENT WRAPPER */
    .content-wrapper {
        margin-left: 260px;
        min-height: 100vh;
        background: #f5f5f5;
    }
</style>

{{-- SIDEBAR --}}
<div class="sidebar">
    <div class="sidebar-logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
    </div>

    <div class="sidebar-menu">
        <a href="{{ route('admin.booking.index') }}" class="{{ request()->is('admin/booking*') ? 'active' : '' }}">
            <span>Booking</span>
        </a>
        <a href="{{ route('admin.product.index') }}" class="{{ request()->is('admin/product*') ? 'active' : '' }}">
            <span>Produk</span>
        </a>
        <a href="{{ route('admin.artikel.index') }}" class="{{ request()->is('admin/artikel*') ? 'active' : '' }}">
            <span>Artikel</span>
        </a>
    </div>

    <div class="sidebar-footer">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn-logout" type="submit">Logout</button>
        </form>
    </div>
</div>