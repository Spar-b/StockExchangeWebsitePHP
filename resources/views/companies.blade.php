<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Companies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>List of Companies</h2>

    @if($companies->isEmpty())
        <p>No companies found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Logo URL</th>
                    <th>Description</th>
                    <th>Phone Number</th>
                    <th>Country</th>
                    <th>Address</th>
                    <th>Foundation Date</th>
                    <th>Number of Workers</th>
                    <th>Value</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td><img src="{{ $company->logo_url }}" alt="{{ $company->name }} Logo" width="100"></td>
                        <td>{{ $company->description }}</td>
                        <td>{{ $company->phone_number }}</td>
                        <td>{{ $company->country }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->foundation_date }}</td>
                        <td>{{ $company->num_workers }}</td>
                        <td>{{ $company->value }}</td>
                        <td>{{ $company->created_at }}</td>
                        <td>{{ $company->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
