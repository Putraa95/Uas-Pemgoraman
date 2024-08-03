<?php

namespace App\Http\Controllers;




use App\Models\Warehouse;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class WarehouseController extends Controller
{
    // Menampilkan daftar gudang dengan pencarian
    public function index(Request $request)
    {
        $query = Warehouse::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%$search%")
                  ->orWhere('location', 'like', "%$search%");
        }

        $warehouses = $query->get();

        return view('warehouses.index', compact('warehouses'));
    }

    // Menampilkan form tambah gudang
    public function create()
    {
        return view('warehouses.create');
    }

    // Menyimpan gudang baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        Warehouse::create($request->all());

        return redirect()->route('warehouses.index')->with('success', 'Warehouse created successfully.');
    }

    // Menampilkan form edit gudang
    public function edit(Warehouse $warehouse)
    {
        return view('warehouses.edit', compact('warehouse'));
    }

    // Memperbarui gudang
    public function update(Request $request, Warehouse $warehouse)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        $warehouse->update($request->all());

        return redirect()->route('warehouses.index')->with('success', 'Warehouse updated successfully.');
    }

    // Menghapus gudang
    public function destroy(Warehouse $warehouse)
    {
        $warehouse->delete();

        return redirect()->route('warehouses.index')->with('success', 'Warehouse deleted successfully.');
    }

    // Membuat laporan PDF gudang
    public function generatePdf()
    {
        $warehouses = Warehouse::all();
        $pdf = Pdf::loadView('warehouses.report', compact('warehouses'));
        return $pdf->download('warehouses_report.pdf');
    }
}

