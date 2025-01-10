<x-includes.head /> 
<body class="bg-dark text-light">
    <div id="page1" class="d-flex align-items-center justify-content-center vh-100 my-5">
        <div class="bg-secondary text-light rounded shadow p-4" style="max-width: 400px;">
            <h3 class="text-center my-5">SELAMAT DATANG! Di Pempek Cek Ina</h3>
            <form method="post" action="{{ route('android.create') }}" class="text-center">
                @csrf
                <label for="nama">Masukkan Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                <label for="">Gender</label>

                <div>
                    <div class="container d-flex justify-content-around">
                        <input required class="radio_item" type="radio" id="Pria" name="gender" value="Pria">
                        <label class="label_item" for="Pria"> <i class="fas fa-male"></i> </label>
                        <input required class="radio_item" type="radio" id="Wanita" name="gender" value="Wanita">
                        <label class="label_item" for="Wanita"> <i class="fas fa-female"></i> </label>
                    </div>
                </div>
                <div>
                    <p>Pilihan Layanan</p>
                        <div class="container d-flex justify-content-around">
                            <input required class="radio_item" type="radio" id="Makan di Tempat" name="jenis_antrian" value="Makan di Tempat">
                            <label class="label_item" for="Makan di Tempat"> <i class="fas fa-utensils"></i> </label>
                            <input required class="radio_item" type="radio" id="Bungkus" name="jenis_antrian" value="Bungkus">
                            <label class="label_item" for="Bungkus"> <i class="fas fa-shopping-bag"></i> </label>
                    </div>
                </div>
            <button
                type="submit"
                class="px-5 py-2 rounded-2 bg-primary text-white border border-1 border-primary"
            >
                Kirim
            </button>
            </form>


        </div>
    </div>
    {{-- <script>
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

        // Handle form submission
        document.getElementById('queueForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const currentDateTime = new Date();
            
            // Format date and time
            const date = currentDateTime.toLocaleDateString('id-ID', { timeZone: 'Asia/Jakarta' });
            const time = currentDateTime.toLocaleTimeString('id-ID', { timeZone: 'Asia/Jakarta' });
            const remainingQueue = Math.floor(Math.random() * 10) + 1;  // Random remaining queue

            if (!selectedGender || !selectedOrderType) {
                alert('Pilih gender dan jenis pesanan terlebih dahulu!');
                return;
            }

            // Save data to localStorage
            localStorage.setItem('name', name);
            localStorage.setItem('gender', selectedGender);
            localStorage.setItem('orderType', selectedOrderType);
            localStorage.setItem('orderTime', time);
            localStorage.setItem('orderDate', date);
            localStorage.setItem('remainingQueue', remainingQueue);

            // Switch to page 2
            window.location.href = "{{ route('android.detail') }}"; // Redirect to the second page
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
    </script> --}}
</body>
</html>
