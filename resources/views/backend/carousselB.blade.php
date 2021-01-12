@extends('adminlte::page')

@section('content')
<div class="container w-50 text-center">
  <h1 class="text-center mb-5">Ajout d'image dans caroussel</h1>

  <form action="/caroussel" method="post" enctype="multipart/form-data">
    @csrf
    <div style="height: 200px" class="">
      <input type="file" name="src">
      <button type="submit" class="btn btn-success">ajouter</button>
    </div>
  </form>
  
</div>

<div class="container w-50">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col" class="text-center">methode</th>
          <th scope="col"></th>

        </tr>
      </thead>
      <tbody>
        @foreach ($bannerimg as $elem)
                    <th scope="row">{{$elem->id}}</th>
                    <td><img height="30px" width="30px" src="{{asset('img/'.$elem->src)}}" alt=""></td>
                    <td><a href="/caroussel/{{$elem->id}}/edit"><button type="submit" class="btn btn-success">editer</button>
                    </a></td>

                    <td><form action="/caroussel/{{$elem->id}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">supprimer</button>
                    </form></td>
                  </tbody>
                  @endforeach
                </table>
  </div>
@endsection