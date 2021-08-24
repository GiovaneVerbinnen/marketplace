<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($stores as $store)
            <tr>
                <th>{{ $store->id }}</th>
                <th>{{ $store->name }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $stores->links() }}
</body>

</html>
