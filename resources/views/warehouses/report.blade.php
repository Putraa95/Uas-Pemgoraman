<!DOCTYPE html>
<html>
<head>
    <title>Warehouse Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Warehouse Report</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Capacity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warehouses as $warehouse)
            <tr>
                <td>{{ $warehouse->name }}</td>
                <td>{{ $warehouse->location }}</td>
                <td>{{ $warehouse->capacity }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
