<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Migration Seeder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @vite('resources/js/app.js')
</head>
<body>
<table class="table">
    <thead>
        <tr>
        <th scope="col">Company</th>
        <th scope="col">Departure Station</th>
        <th scope="col">Arrival Station</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($trains as $train)
        <th scope="row">{{ $train->company}}</th>
        <td>{{ $train->departure_station}}</td>
        <td>{{ $train->arrival_station}}</td>
        <td>{{ $train->departure_time}}</td>
        <td>{{ $train->arrival_time}}</td>
        <td> {{$train->date}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>