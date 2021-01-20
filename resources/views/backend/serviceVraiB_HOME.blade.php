@extends('adminlte::page')

@section('content')
<form action="/servicevrai" method="post">
@csrf
     <div style="height: 200px" class="container w-50 text-center pb-5">
        <h1 class="text-center">Rajout de texte 'presentation'</h1>
        <br>
        <input type="text" name="icon" placeholder="icon">
        <br>
        <br>
        <input type="text" name="titre" placeholder="titre">
        <br>
        <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte" placeholder="texte"></textarea>
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


<div class="pt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">icon</th>
          <th scope="col">titre</th>
          <th scope="col">texte</th>
          <th scope="col" class="text-center">action</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($servicevrai as $elem)
                    <th scope="row">{{$elem->id}}</th>
                    <td><p>{{$elem->icon}}</p></td>
                    <td><p>{{$elem->titre}}</p></td>
                    <td><p>{{$elem->texte}}</p></td>
                    <td><a href="/servicevrai/{{$elem->id}}/edit"><button type="submit" class="btn btn-success">edit</button></a></td>
                    <td><form action="/servicevrai/{{$elem->id}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
                  </tbody>
                  @endforeach
                </table>
  </div>
@endsection