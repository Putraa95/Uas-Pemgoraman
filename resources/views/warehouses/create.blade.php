<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Warehouse</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <header>
        <h1>Add Warehouse</h1>
    </header>
    <main class="form-container">
        <form method="POST" action="{{ route('warehouses.store') }}" class="add-form">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            <label for="capacity">Capacity:</label>
            <input type="number" id="capacity" name="capacity" required>
            <button type="submit" class="btn">Save</button>
        </form>
    </main>
</body>
</html>
