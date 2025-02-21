<!DOCTYPE html> <!-- Menentukan bahwa ini adalah dokumen HTML -->
<html>
<head>
    <title>Car List</title> <!-- Menetapkan judul halaman sebagai "Car List" -->
</head>
<body> <!-- Awal dari isi halaman web -->
    <h1>Cars</h1> <!-- Menampilkan judul utama halaman "Cars" -->

    @if(session('success')) <!-- Mengecek apakah ada pesan sukses yang disimpan dalam session -->
        <p>{{ session('success') }}</p> <!-- Jika ada, pesan sukses akan ditampilkan -->
    @endif <!-- Mengakhiri kondisi if -->

    <a href="{{ route('cars.create') }}">Add Car</a> <!-- Tautan untuk menambahkan mobil baru -->

    <ul> <!-- Membuka daftar untuk menampilkan mobil -->
        @foreach($cars as $car) <!-- Looping melalui daftar $cars -->
            <li> <!-- Membuka elemen daftar -->
                {{ $car->brand }} - {{ $car->model }} ({{ $car->year }}) - ${{ number_format($car->price) }} | Stock: {{ $car->stock }} 
                <a href="{{ route('cars.edit', $car) }}">Edit</a> <!-- Tautan untuk mengedit mobil -->
                
                <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;"> <!-- Form untuk menghapus mobil -->
                    @csrf <!-- Token CSRF untuk keamanan -->
                    @method('DELETE') <!-- Metode DELETE untuk menghapus -->
                    <button type="submit">Delete</button> <!-- Tombol hapus -->
                </form> <!-- Menutup form -->
            </li> <!-- Menutup elemen daftar -->
        @endforeach <!-- Mengakhiri perulangan -->
    </ul> <!-- Menutup daftar -->
</body>
</html> <!-- Menutup dokumen HTML -->