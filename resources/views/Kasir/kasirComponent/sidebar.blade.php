<div id="mySidenav" class="sidenav">
    {{-- (X) Close Button --}}
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    {{-- Logo on Sidebar --}}
    <div class="my-logo">
        <img src="/assets/img/logo/1.png" alt="Logo" class="rz-logo">
    </div>

    {{-- List Menu --}}
    <div class="menu-sidenav">
        <a href="{{ url("/kasir/menu") }}"><li class="list {{ Request::is('kasir/menu') ? 'active' : '' }}"><i class="fas fa-coffee"></i>&ensp;Menu</li></a>
        <a href="{{ url("/kasir/keranjang") }}"><li class="list {{ Request::is('kasir/keranjang','kasir/buat','kasir/edit','kasir/bayar') ? 'active' : '' }}"><i class="fas fa-money-check"></i>&ensp;Transaksi</li></a>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        ><li class="{{ Request::is('admin/data','admin/edit','admin/tambah') ? 'active' : '' }}" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><i class="fas fa-users"></i>&ensp;Logout</li></a>
        <form action="{{ route('logout') }}" id="logout-form" method="post">
            @csrf
        </form>

    </div>
</div>
