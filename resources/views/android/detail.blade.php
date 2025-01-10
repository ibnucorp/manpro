<x-includes.head/>
<div id="page2" class="d-flex align-items-center justify-content-center vh-100 my-5">
    <div class="bg-light text-dark rounded shadow p-4" style="max-width: 400px;">
        <div class="container">
            <div class="row text-center border border-1 border-dark rounded mb-5">
                <h2 class="mb-4">Nomor Antrian</h2>
                <h1 style="font-size: 5rem;">{{ $nomor_antri }}</h1>
            </div>
            <div class="row">
                <p><strong>Nama:</strong> {{ $name }}</p>
                <p><strong>Gender:</strong> {{ $gender }}</p>
                <p><strong>Jenis Pesanan:</strong> {{ $jenis_antrian }}</p>
                <p><strong>Tanggal Pesan:</strong> {{ $tanggal }}</p>
                <p><strong>Waktu Pesan:</strong> {{ $waktu }}</p>
            </div>
            <div class="row mt-4">
                <a href="/" id="resetButton" class="btn btn-danger w-100">Reset</a>
            </div>
        </div>
    </div>
</div>
