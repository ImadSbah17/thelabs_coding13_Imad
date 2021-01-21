@extends('adminlte::page')

@section('content')
<form action="/testimonial" method="post" enctype="multipart/form-data">
@csrf
     <div style="height: 200px" class="container w-50 text-center pb-5">
        <h1 class="text-center">Rajout de texte 'testimonial'</h1>
        <br>
        <input type="text" name="nom" placeholder="nom">
        <br>
        <br>
        <input type="text" name="prenom" placeholder="prenom">
        <br>
        <br>
        <input type="text" name="fonction" placeholder="fonction">
        <br>
        <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="temoignage" placeholder="temoignage"></textarea>
        <br>
        <input type="file" name="src">
        <br>
        <br>
        <button type="submit" class="btn btn-success text-center">add</button>
    </div>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="pt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nom</th>
          <th scope="col">prénom</th>
          <th scope="col">fonction</th>
          <th scope="col">témoignage</th>
          <th scope="col">image</th>
          <th scope="col" class="text-center">action</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>

        @foreach ($testimonial as $elem)
                    <th scope="row">{{$elem->id}}</th>
                    <td><p>{{$elem->nom}}</p></td>
                    <td><p>{{$elem->prenom}}</p></td>
                    <td><p>{{$elem->fonction}}</p></td>
                    <td><p>{{$elem->temoignage}}</p></td>
                    <td><p>{{$elem->src}}</p></td>

                    <td>
                      <a href="/testimonial/{{$elem->id}}/edit">
                        <button type="submit" class="btn btn-success">edit</button>
                      </a>
                    </td>

                    <td>
                      <form action="/testimonial/{{$elem->id}}" method="post">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tbody>
        @endforeach
      </table>
</div>
@endsection