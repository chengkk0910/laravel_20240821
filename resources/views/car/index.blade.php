<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <div class="text-end mb-3">
            {{-- 1. link --}}
            {{-- <a href="/cars/create" class="btn btn-success">add</a> --}}

            {{-- 2. route name --}}
            <a href="{{ route('cars.create') }}" class="btn btn-success">add</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>opt</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['name'] }}</td>
                        <td>
                            {{-- 1. link --}}
                            {{-- <a href="/cars/{{ $value['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a> --}}

                            {{-- 2. route name --}}
                            <a href="{{ route('cars.edit', ['car' => $value['id']]) }}" class="btn btn-warning btn-sm">edit</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</body>

</html>
