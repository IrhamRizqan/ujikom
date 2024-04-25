<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{route('dashboard')}}">
  <span class="align-middle">Padasuka Cafe</span>
</a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('produk.index')}}">
                    <i class="align-middle" data-feather="box"></i> <span class="align-middle">Produk</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('pesanan.index')}}">
                    <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Pesanan</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('pelanggan.index')}}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Pelanggan</span>
                </a>
            </li>

            <li class="sidebar-item">
                <form class="sidebar-link" id="logout-form" action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
</nav>
