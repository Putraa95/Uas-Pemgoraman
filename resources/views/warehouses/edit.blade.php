<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Warehouse</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <header>
        <h1>Edit Warehouse</h1>
    </header>
    <main class="form-container">
        <form method="POST" action="{{ route('warehouses.update', $warehouse) }}" class="edit-form">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $warehouse->name }}" required>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{ $warehouse->location }}" required>
            <label for="capacity">Capacity:</label>
            <input type="number" id="capacity" name="capacity" value="{{ $warehouse->capacity }}" required>
            <button type="submit" class="btn">Update</button>
        </form>
    </main>
</body>
</html>
