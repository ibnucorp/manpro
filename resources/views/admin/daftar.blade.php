@extends('components.layout.app')

@section('content')
    <div class="container fluid p-4">
        {{-- Header --}}
       <div class="row mb-3">
        <div class="container">
            <h2>Daftar Antrian</h2>
        </div>
       </div>
       {{-- /Header --}}

       {{-- Stats --}}
        <div class="row mb-5">
            {{-- Nomor Antri --}}
            <div class="col">
                <div class="container border border-1 border-primary bg-light py-2 px-5 rounded-4 text-center">
                    <div class="row">
                        <h6>Nomor Antrian Sekarang</h6>
                        <h1 style="font-size: 6rem;">{{ $nomor_antrian }}</h1>
                    </div>
                </div>
            </div>
            {{-- /Nomor Antri --}}
            <div class="col me-2">
                    <div class="container border border-1 border-primary bg-light py-1 px-5 rounded-4">
                        <div class="row">
                            <div class="col-4 align-content-center">
                                <h1 class="text-primary"><i class="fas fa-users me-3"></i></h1>
                            </div>
                            <div class="col-8 align-content-center text-end">
                                    <h6>Sisa Antrian</h6>
                                    <h3>{{ $sisa_antrian }}</h3>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        {{-- /Stats --}}
        {{-- Table --}}
        <div class="row">
            <div class="col">
                <div class="container p-5 border border-1 border-primary rounded-4">
                    <table id="now" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Nomor Antri</th>
                                <th>Gender</th>
                                <th>Jenis Antrian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $item)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nomor_antri }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->jenis_antrian }}</td>
                                    <td class="flex">
                                        <form action="{{ route('customers.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-danger px-1 rounded-2">Delete</button>
                                        </form>
                                        <button                 class="btn btn-success btn-sm rounded-circle mic-button"
                data-nomor-antri="{{ $item->nomor_antri }}"
                data-nama="{{ $item->nama }}"><i class="bi-mic-fill"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- /Table --}}
    </div>
@endsection

<audio id="tingtung" src="{{ asset('audio/tingtung.mp3') }}"></audio>
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=MAYhbUEw"></script>
  <script>
  // Event listener for all microphone buttons
document.addEventListener('DOMContentLoaded', function() {
    // Attach click event to microphone buttons
    document.querySelectorAll('.mic-button').forEach(button => {
        button.addEventListener('click', function() {
            // Get data attributes
            const nomorAntri = this.dataset.nomorAntri;
            const nama = this.dataset.nama;

            // Play bell sound
            const bell = document.getElementById('tingtung');
            bell.pause();
            bell.currentTime = 0;
            bell.play();

            // Set delay for announcement
            const durasi_bell = bell.duration * 770;

            setTimeout(function() {
                // Use Responsive Voice to announce the queue number
                responsiveVoice.speak(
                    `Nomor Antrian, ${nomorAntri}, atas nama ${nama}, silahkan menuju kasir`,
                    "Indonesian Male",
                    {
                        rate: 0.9,
                        pitch: 1,
                        volume: 1
                    }
                );
            }, durasi_bell);
        });
    });
});

</script>