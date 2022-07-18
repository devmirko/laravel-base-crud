@extends('base')

@section('mainContent')
<h1>il fumetto da te ricercato: {{ $comic->id }}</h1>

    <table>
        <thead>
            <tr>
                <th>Campo</th>
                <th>Valore</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comic->toArray() as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
