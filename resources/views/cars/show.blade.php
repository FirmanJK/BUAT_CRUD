<!DOCTYPE html> <!-- Menentukan bahwa ini adalah dokumen HTML -->
<html>
<head>
    <title>Car List</title> <!-- Menetapkan judul halaman sebagai "Car List" -->
</head>
<body> <!-- Awal dari bagian isi halaman -->

    <h1>Cars</h1> <!-- Menampilkan heading utama "Cars" -->

    @if(session('success')) <!-- Mengecek apakah ada session flash message dengan key 'success' -->
        <p>{{ session('success') }}</p> <!-- Jika ada, menampilkan pesan sukses dalam elemen <p> -->
    @endif <!-- Menutup pernyataan if Laravel Blade -->

    <a href="{{ route('cars.create') }}">Add Car</a> <!-- Link untuk menambah mobil baru, mengarah ke route cars.create -->
    
    <ul> <!-- Membuka elemen unordered list untuk menampilkan daftar mobil -->
        @foreach ($cars as $car) <!-- Looping melalui semua mobil dalam variabel $cars -->
            <li> <!-- Membuka elemen list untuk setiap mobil -->
                {{ $car->brand }} - {{ $car->model }} ({{ $car->year }}) <!-- Menampilkan merek, model, dan tahun mobil -->

                <a href="{{ route('cars.edit', $car) }}">Edit</a> 
                <!-- Link untuk mengedit mobil, mengarah ke route cars.edit dengan parameter $car -->

                <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
                    <!-- Form untuk menghapus mobil -->
                    @csrf <!-- Menyertakan token CSRF untuk keamanan -->
                    @method('DELETE') <!-- Laravel tidak mendukung metode DELETE langsung dalam form HTML, maka digunakan method spoofing -->
                    <button type="submit">Delete</button> <!-- Tombol untuk menghapus mobil -->
                </form> <!-- Menutup elemen form -->
            </li> <!-- Menutup list item -->
        @endforeach <!-- Menutup perulangan foreach -->
    </ul> <!-- Menutup elemen unordered list -->

</body>
</html> <!-- Menutup body dan HTML -->