@extends('adminlte::page')

@section('content')

<form action="/video/{{$video->id}}" method="POST">
@method('PUT')
@csrf

<div class="container ">
    <h1 class="text-center mb-5">Modifier la vidéo</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">liens</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$video->id}}</th>

          <td> <input type="text" name="liens" placeholder="{{$video->liens}}"></td>
     
          <td><button type="submit" class="btn btn-success">modifier</button></td>
        </tbody>
    </table>
  </div>

</form>
    
@endsection