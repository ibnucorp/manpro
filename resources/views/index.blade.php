<x-includes.head>Selamat Datang</x-includes.head>
<body>
      <main class="flex-shrink-0">
    <div class="container pt-5">
      <!-- tampilkan pesan selamat datang -->
      <div class="alert alert-light d-flex align-items-center mb-5" role="alert">
        <i class="bi-info-circle text-success me-3 fs-3" style="font-size: 10rem"></i>
        <div>
          Selamat Datang di <strong>Aplikasi Antrian Berbasis Web</strong>. Silahkan pilih halaman yang ingin ditampilkan.
        </div>
      </div>

      <div class="row gx-5">
        <!-- link halaman nomor antrian -->
        <div class="col-lg-6 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
                <i class="bi-people" style="font-size: 5rem"></i>
              <h3>Nomor Antrian</h3>
              <p class="mb-4">Halaman Nomor Antrian digunakan pengunjung untuk mengambil nomor antrian.</p>
              <a href="/android" class="btn btn-success rounded-pill px-4 py-2">
                Tampilkan <i class="bi-chevron-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- link halaman panggilan antrian -->
        <div class="col-lg-6 mb-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body p-5">
                <i class="bi-mic" style="font-size: 5rem;"></i>
              <h3>Halaman Admin</h3>
              <p class="mb-4">Halaman Admin digunakan petugas loket untuk memantau antrian pengunjung.</p>
              <a href="/admin" class="btn btn-success rounded-pill px-4 py-2">
                Tampilkan <i class="bi-chevron-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>