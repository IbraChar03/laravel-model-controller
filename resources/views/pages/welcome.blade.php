@extends('layouts.main-layout')
@section('content')
<ul> 
    @foreach ($movies as $movie)
        <li>
        <strong>Title :</strong> {{$movie -> title}} -- <strong>Original Title : </strong> {{$movie -> original_title}} -- <strong>Nationality : </strong> {{$movie -> nationality}}
        </li>
        <br>
    @endforeach
</ul>
@endsection
