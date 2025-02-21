<?php 

namespace App\Http\Controllers; // Perbaiki namespace (Controllers dengan "s")
use App\Models\Car; // Perbaiki namespace model (Models dengan "s")
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index() // Method index()
    {
        $cars = Car::all(); // Mengambil semua data dari tabel cars
        return view('cars.index', compact('cars')); // Menampilkan halaman cars.index dengan data cars
    }

    public function create() // Method create()
    {
        return view('cars.create'); // Menampilkan halaman formulir tambah mobil
    }

    public function store(Request $request) // Method store() untuk menyimpan data
    {
        $request->validate([ // Validasi input pengguna
            'brand' => 'required', 
            'model' => 'required',
            'year' => 'required|integer',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'nullable', 
        ]);

        // Menyimpan data mobil ke database
        Car::create($request->only(['brand', 'model', 'year', 'price', 'stock', 'description']));
        return redirect()->route('cars.index')->with('success', 'Car added successfully.');
    }

    public function show(Car $car) // Gunakan model Car sebagai parameter
    {
        return view('cars.show', compact('car')); 
    }

    public function edit(Car $car) // Gunakan model Car sebagai parameter
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car) // Gunakan model Car sebagai parameter
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'nullable',
        ]);

        // Update hanya atribut yang diizinkan
        $car->update($request->only(['brand', 'model', 'year', 'price', 'stock', 'description']));
        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }

    public function destroy(Car $car) // Gunakan model Car sebagai parameter
    {
        $car->delete(); // Perbaiki variabel menjadi huruf kecil
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}