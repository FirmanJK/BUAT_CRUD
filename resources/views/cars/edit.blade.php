<!DOCTYPE html> <!-- Menentukan bahwa ini adalah dokumen HTML -->
<html>
<head>
    <title>Edit Car</title> <!-- Menetapkan judul halaman sebagai "Edit Car" -->
</head>
<body> <!-- Awal dari bagian isi halaman -->

    <h1>Edit Car</h1> <!-- Menampilkan heading utama "Edit Car" -->

    <form action="{{ route('cars.update', $car) }}" method="POST"> 
        <!-- Membuka form untuk mengedit mobil yang sudah ada -->
        @csrf <!-- Menyertakan token CSRF untuk keamanan -->
        @method('PUT') <!-- Laravel tidak mendukung metode PUT secara langsung dalam form HTML, maka digunakan method spoofing -->

        <label for="brand">Brand:</label> <!-- Label untuk input merek -->
        <input type="text" name="brand" value="{{ $car->brand }}" required> <!-- Input merek mobil yang sudah ada -->
        <br> <!-- Baris baru -->

        <label for="model">Model:</label> <!-- Label untuk input model -->
        <input type="text" name="model" value="{{ $car->model }}" required> <!-- Input model mobil yang sudah ada -->
        <br> <!-- Baris baru -->

        <label for="year">Year:</label> <!-- Label untuk input tahun -->
        <input type="number" name="year" value="{{ $car->year }}" required> <!-- Input tahun mobil yang sudah ada -->
        <br> <!-- Baris baru -->

        <label for="price">Price:</label> <!-- Label untuk input harga -->
        <input type="number" name="price" value="{{ $car->price }}" required> <!-- Input harga mobil yang sudah ada -->
        <br> <!-- Baris baru -->

        <label for="stock">Stock:</label> <!-- Label untuk input stok -->
        <input type="number" name="stock" value="{{ $car->stock }}" required> <!-- Input stok mobil yang sudah ada -->
        <br> <!-- Baris baru -->

        <label for="description">Description:</label> <!-- Label untuk input deskripsi -->
        <textarea name="description" required>{{ $car->description }}</textarea> <!-- Input deskripsi mobil yang sudah ada -->
        <br> <!-- Baris baru -->

        <button type="submit">Update Car</button> <!-- Tombol untuk mengirim form dan memperbarui mobil -->
    </form> <!-- Menutup elemen form -->

    <a href="{{ route('cars.index') }}">Back to List</a> <!-- Tautan untuk kembali ke daftar mobil -->
</body>
</html> <!-- Menutup body dan HTML -->