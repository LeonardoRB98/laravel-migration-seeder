@extends('layouts.main')

@section('header-content')
    <h1>My articles</h1>
@endsection

@section('main-content')
    <table>
        <thead>
            <th>title</th>
            <th>subtitle</th>
            <th>author</th>
            <th>pubblication date</th>
        </thead>
        <tbody>
            @foreach($articles as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->subtitle }}</td>
                <td>{{ $item->author }}</td>
                <td>{{ $item->pubblication_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('footer-content')

@endsection
