<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Tickers</title>
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
    <h2>List of Tickers</h2>

    @if($tickers->isEmpty())
        <p>No tickers found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Symbol</th>
                    <th>Open Value</th>
                    <th>Close Value</th>
                    <th>Current Value</th>
                    <th>Market Cap</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickers as $ticker)
                    <tr>
                        <td>{{ $ticker->id }}</td>
                        <td>{{ $ticker->symbol }}</td>
                        <td>{{ $ticker->open_value }}</td>
                        <td>{{ $ticker->close_value }}</td>
                        <td>{{ $ticker->current_value }}</td>
                        <td>{{ $ticker->market_cap }}</td>
                        <td>{{ $ticker->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
