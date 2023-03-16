<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Аукціон</h1>
    @if(count($lots))
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Starting price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lots as $lot)
                <tr>
                    <th>{{ $lot->id }}</th>
                    <th>{{ $lot->name_lot }}</th>
                    <th>{{ $lot->start_date }}</th>
                    <th>{{ $lot->end_date }}</th>
                    <th>{{ $lot->starting_price }}</th>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
