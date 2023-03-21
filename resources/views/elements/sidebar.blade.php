<div class="deznav">
  <div class="deznav-scroll">
    <ul class="metismenu" id="menu">
      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="flaticon-381-networking"></i>
          <span class="nav-text">Dashboard</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{ route('home') }}">Dashboard</a></li>
        </ul>
      </li>
      <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
        <i class="flaticon-381-television"></i>
        <span class="nav-text">Peminjaman</span>
      </a>
      <ul aria-expanded="false">
        <li><a href="http://test-peminjaman.test/ecom-product-grid1">Ruangan</a></li>
        <li class=""><a href="http://test-peminjaman.test/ecom-product-grid">Alat</a></li>
      </ul>
      </li>

      <li>
        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
          <i class="flaticon-381-networking"></i>
          <span class="nav-text">Admin</span>
        </a>
        <ul aria-expanded="false">
          <li><a href="{{ route('banner.index') }}">Banner</a></li>
          <li><a href="{{ route('category.index') }}">Kategori</a></li>
          <li><a href="{{ route('course.index') }}">Matakuliah</a></li>
          <li><a href="{{ route('lecture.index') }}">Dosen</a></li>
          <li><a href="{{ route('room.index') }}">Ruangan</a></li>
          <li><a href="{{ route('product.index') }}">Produk</a></li>
          <li><a href="{{ route('user.index') }}">User</a></li>
        </ul>
      </li>
      
    </ul>
    <div class="add-menu-sidebar">
      <img src="http://test-peminjaman.test/images/calendar.png" alt="" class="mr-3">
      <p class="	font-w500 mb-0">Cek kalender Aktifitas</p>
    </div>
    <div class="copyright">
      <p><strong>Portal Peminjaman</strong> © 2023 All Rights Reserved</p>
      <p>Made with <span class="heart"></span> by Polibatam</p>
    </div>
  </div>
</div>