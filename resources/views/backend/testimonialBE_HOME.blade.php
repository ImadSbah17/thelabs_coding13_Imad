@extends('adminlte::page')

@section('content')

<form action="/testimonial/{{$testimonial->id}}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="container ">
    <h1 class="text-center mb-5">Modifier le testimonial</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nom</th>
          <th scope="col">prénom</th>
          <th scope="col">fonction</th>
          <th scope="col">témoignage</th>
          <th scope="col">image</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$testimonial->id}}</th>

          <td><input type="text" name="nom" placeholder="{{$testimonial->nom}}"></td>
          <td> <input type="text" name="prenom" placeholder="{{$testimonial->prenom}}"></td>
          <td> <input type="text" name="fonction" placeholder="{{$testimonial->fonction}}"></td>
          <td> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="temoignage" placeholder="{{$testimonial->temoignage}}"></textarea></td>
          <td><input type="file" name="src"></td>
  

          <td><button type="submit" class="btn btn-success">modifier</button></td>
        </tbody>
    </table>
  </div>

</form>
    
@endsection