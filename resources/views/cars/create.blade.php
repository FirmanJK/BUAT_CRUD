<!DOCTYPE html> <!-- Menentukan bahwa ini adalah dokumen HTML -->
<html>
<head>
    <title>Add Car</title> <!-- Menetapkan judul halaman sebagai "Add Car" -->
</head>
<body> <!-- Awal dari bagian isi halaman -->

    <h1>Add Car</h1> <!-- Menampilkan heading utama "Add Car" -->

    <form action="{{ route('cars.store') }}" method="POST"> 
        <!-- Membuka form untuk menambahkan mobil baru -->
        @csrf <!-- Menyertakan token CSRF untuk keamanan -->
        
        <label for="brand">Brand:</label> <!-- Label untuk input merek -->
        <input type="text" name="brand" required> <!-- Input merek mobil -->
        <br> <!-- Baris baru -->

        <label for="model">Model:</label> <!-- Label untuk input model -->
        <input type="text" name="model" required> <!-- Input model mobil -->
        <br> <!-- Baris baru -->

        <label for="year">Year:</label> <!-- Label untuk input tahun -->
        <input type="number" name="year" required> <!-- Input tahun mobil -->
        <br> <!-- Baris baru -->

        <label for="price">Price:</label> <!-- Label untuk input harga -->
        <input type="number" name="price" required> <!-- Input harga mobil -->
        <br> <!-- Baris baru -->

        <label for="stock">Stock:</label> <!-- Label untuk input stok -->
        <input type="number" name="stock" required> <!-- Input stok mobil -->
        <br> <!-- Baris baru -->

        <label for="description">Description:</label> <!-- Label untuk input deskripsi -->
        <textarea name="description" required></textarea> <!-- Input deskripsi mobil -->
        <br> <!-- Baris baru -->

        <button type="submit">Add Car</button> <!-- Tombol untuk menambahkan mobil -->
    </form> <!-- Menutup elemen form -->

    <a href="{{ route('cars.index') }}">Back to List</a> <!-- Tautan untuk kembali ke daftar mobil -->
</body>
</html> <!-- Menutup body dan HTML -->