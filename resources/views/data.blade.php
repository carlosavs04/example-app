<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Data</title>
</head>
<body>
    <h1 class="text-center">Data</h1>
    <!--<div class="d-flex justify-content-center">
        <form action="{{ route('create') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="data">Data</label>
                <input type="text" class="form-control" id="data" name="data" required>
            </div>
            <button type="submit" class="btn btn-primary m-3">Add data</button>
        </form>
    </div>-->
    <div class="d-flex justify-content-center">
        <table class="table table-dark table-striped" style="width: 75%;">
            <thead>
                <tr style="text-align: center;">
                    <th class="border py-3">Id</th>
                    <th class="border py-3">Data</th>
                    <th class="border py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr class="border border-collapse bg-white text-center">
                    <td class="border px-6 py-2">{{ $d->id }}</td>
                    <td class="border px-6 py-2">{{ $d->data }}</td>
                <td class="border px-6 py-2">
                    <a href="{{route('delete', $d->id)}}">
                        <button class="bg-danger text-white">
                            <i class="bi bi-trash3-fill"></i></button>
                    </a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>