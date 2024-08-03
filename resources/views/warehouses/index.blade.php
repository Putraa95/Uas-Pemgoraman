<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pencarian data gudang </title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Selamat datang di WEBSITE</h1>
        <h2>Pencarian Data Gudang Menggunakan Laravel 11</h2>
    </header>
    <main class="container">
        <form method="GET" action="{{ route('warehouses.index') }}" class="search-form">
            <input type="text" name="search" placeholder="Search">
            <button type="submit">Search</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($warehouses as $warehouse)
                    <tr>
                        <td>{{ $warehouse->name }}</td>
                        <td>{{ $warehouse->location }}</td>
                        <td>{{ $warehouse->capacity }}</td>
                        <td>
                            <a href="{{ route('warehouses.edit', $warehouse) }}" class="btn">Edit</a>
                            <form method="POST" action="{{ route('warehouses.destroy', $warehouse) }}" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>
        <a href="{{ route('warehouses.create') }}" class="btn"> + Add Warehouse</a>
        <a href="{{ route('warehouses.report') }}" class="btn">Generate PDF Report</a>
    </footer>
</body>
</html>
