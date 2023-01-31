@extends('layouts.main-layout')
@section('content')
<main>
<div class="container">
    @foreach ($movies as $movie)
    <div class="box">
        
        <strong>Title :</strong> {{$movie -> title}}  <br>
        <strong>Original Title : </strong> {{$movie -> original_title}}  <br>
        <strong>Nationality : </strong> {{$movie -> nationality}} <br>
        <strong>Release Date : </strong> {{$movie -> date}} <br>
        <strong>Vote : </strong> {{$movie -> vote}}
        
        <br>
       </div>
    @endforeach
</div>
</main>

@endsection
