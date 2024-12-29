<x-includes.head /> 
<body class="bg-dark text-light">
    <div id="page1" class="d-flex align-items-center justify-content-center vh-100">
        <div class="bg-secondary text-light rounded shadow p-4" style="max-width: 400px;">
            <h3 class="text-center my-5">SELAMAT DATANG! Di Pempek Cek Ina</h3>
            <form id="queueForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Masukkan Nama Anda</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>

                <div class="mb-3 text-center">
                    <p class="fw-bold">Gender</p>
                    <div class="d-flex justify-content-center gap-3 row-cols-2">
                        <div class="text-center">
                            <button type="button" class="btn btn-light p-3 border-2 gender w-75" id="maleButton" data-value="Pria">
                                <i class="fas fa-male" style="font-size: 5rem"></i>
                            </button>
                            <p class="mt-2">Pria</p>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-light p-3 border-2 gender w-75" id="femaleButton" data-value="Perempuan">
                                <i class="fas fa-female" style="font-size: 5rem"></i>
                            </button>
                            <p class="mt-2">Perempuan</p>
                        </div>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <p class="fw-bold">Jenis Pesanan</p>
                    <div class="d-flex justify-content-center gap-3 row-cols-2">
                        <div class="text-center">
                            <button type="button" class="btn btn-light p-3 border-2 w-75 order-type" id="bungkusButton" data-value="Bungkus">
                                <i class="fas fa-shopping-bag" style="font-size: 5rem"></i>
                            </button>
                            <p class="mt-2">Bungkus</p>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-light p-3 border-2 w-75 order-type" id="makanDitempatButton" data-value="Makan di Tempat">
                                <i class="fas fa-utensils" style="font-size: 5rem"></i>
                            </button>
                            <p class="mt-2">Makan di Tempat</p>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Ambil</button>
            </form>
        </div>
    </div>

    <div id="page2" class="d-flex align-items-center justify-content-center vh-100 d-none">
        <div class="bg-light text-dark rounded shadow p-4" style="max-width: 400px;">
            <div class="container">
                <div class="row text-center border border-1 border-dark rounded mb-5">
                    <h2 class="mb-4">Nomor Antrian</h2>
                    <h1 style="font-size: 5rem;">10</h1>
                </div>
                <div class="row">
                    <p><strong>Nama:</strong> <span id="displayName"></span></p>
                    <p><strong>Gender:</strong> <span id="displayGender"></span></p>
                    <p><strong>Jenis Pesanan:</strong> <span id="displayOrderType"></span></p>
                    <p><strong>Tanggal Pesan:</strong> <span id="orderDate"></span></p>
                    <p><strong>Waktu Pesan:</strong> <span id="orderTime"></span></p>
                    <p><strong>Sisa Antrian:</strong> <span id="remainingQueue"></span></p>
                </div>
                <div class="row mt-4">
                    <button id="resetButton" class="btn btn-danger w-100">Reset</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        let selectedGender = null;
        let selectedOrderType = null;

        function toggleActive(categoryClass, buttonId) {
            const buttons = document.querySelectorAll(`.${categoryClass}`);
            buttons.forEach(button => button.classList.remove('active', 'btn-outline-dark', 'border-primary'));
            const button = document.getElementById(buttonId);
            button.classList.add('active', 'btn-outline-dark', 'border-primary');
        }

        document.getElementById('maleButton').addEventListener('click', () => {
            toggleActive('gender', 'maleButton');
            selectedGender = 'Pria';
        });

        document.getElementById('femaleButton').addEventListener('click', () => {
            toggleActive('gender', 'femaleButton');
            selectedGender = 'Perempuan';
        });

        document.getElementById('bungkusButton').addEventListener('click', () => {
            toggleActive('order-type', 'bungkusButton');
            selectedOrderType = 'Bungkus';
        });

        document.getElementById('makanDitempatButton').addEventListener('click', () => {
            toggleActive('order-type', 'makanDitempatButton');
            selectedOrderType = 'Makan di Tempat';
        });

        document.addEventListener('DOMContentLoaded', () => {
                const currentPage = localStorage.getItem('currentPage');
                if (currentPage === 'page2') {
                    document.getElementById('page1').classList.add('d-none');
                    document.getElementById('page2').classList.remove('d-none');

                    document.getElementById('displayName').innerText = localStorage.getItem('name');
                    document.getElementById('displayGender').innerText = localStorage.getItem('gender');
                    document.getElementById('displayOrderType').innerText = localStorage.getItem('orderType');
                    document.getElementById('orderTime').innerText = localStorage.getItem('orderTime');
                    document.getElementById('remainingQueue').innerText = localStorage.getItem('remainingQueue');
                }
            });

            // Handle form submission
        document.getElementById('queueForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const currentDateTime = new Date();
            
            // Format date and time
            const date = currentDateTime.toLocaleDateString('id-ID', { timeZone: 'Asia/Jakarta' });
            const time = currentDateTime.toLocaleTimeString('id-ID', { timeZone: 'Asia/Jakarta' });
            const remainingQueue = Math.floor(Math.random() * 10) + 1;

            if (!selectedGender || !selectedOrderType) {
                alert('Pilih gender dan jenis pesanan terlebih dahulu!');
                return;
            }

            document.getElementById('displayName').innerText = name;
            document.getElementById('displayGender').innerText = selectedGender;
            document.getElementById('displayOrderType').innerText = selectedOrderType;
            document.getElementById('orderDate').innerText = date;
            document.getElementById('orderTime').innerText = time;
            document.getElementById('remainingQueue').innerText = remainingQueue;

            document.getElementById('page1').classList.add('d-none');
            document.getElementById('page2').classList.remove('d-none');
        });
            // Reset page state
            function resetPage() {
                localStorage.clear();
                location.reload();
            }
            document.getElementById('resetButton').addEventListener('click', function () {
            // Reset form values
            document.getElementById('queueForm').reset();

            // Remove active classes from gender and order type buttons
            const genderButtons = document.querySelectorAll('.gender');
            genderButtons.forEach(button => button.classList.remove('active'));

            const orderTypeButtons = document.querySelectorAll('.order-type');
            orderTypeButtons.forEach(button => button.classList.remove('active'));

            // Reset selected variables
            selectedGender = null;
            selectedOrderType = null;

            // Switch back to page 1
            document.getElementById('page2').classList.add('d-none');
            document.getElementById('page1').classList.remove('d-none');
        });

    </script>
</body>
</html>