@extends('layout.public')

@section('main')
    <article class="container">
        <h1 class="mt-5 fw-bold text-primary">TRNITALIA TRISTE</h1>

        <table class="table table-primary table-striped  p-3 border  mt-4">
            {{--    function prettify_field($field)
            {
                return title_case(snake_case(camel_case($field), ' '));
            } --}}


            <thead class="">
                <tr>
                    <th>company</th>
                    <th>code</th>
                    <th>departure_station</th>
                    <th>arrival_station</th>
                    <th>departure_date</th>
                    <th>arrival_date</th>
                    <th>in time</th>
                    <th>deleted</th>
                    <th>carriages</th>
                    <th>total_seats</th>
                    <th>price</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train['company'] }}</td>
                        <td>{{ $train['code'] }}</td>
                        <td>{{ $train['departure_station'] }}</td>
                        <td>{{ $train['arrival_station'] }}</td>
                        <td>{{ $train['departure_date'] }}</td>
                        <td>{{ $train['arrival_date'] }}</td>
                        <td>{{ $train['in time'] }}</td>
                        <td>{{ $train['deleted'] }}</td>
                        <td>{{ $train['carriages'] }}</td>
                        <td>{{ $train['total_seats'] }}</td>
                        <td>{{ $train['price'] }}€</td>
                    </tr>
                @endforeach
            </tbody>




        </table>
    </article>
@endsection
