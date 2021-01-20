@extends('adminlte::page')

@section('content')
<form action="/presentationHome" method="post" enctype="multipart/form-data">
@csrf
     <div style="height: 200px" class="container w-50 text-center pb-5">
        <h1 class="text-center">Rajout de texte 'presentation'</h1>
        <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte" placeholder="paragraphe1"></textarea>
        <br>
        <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textebis" placeholder="paragraphe2"></textarea>

        <br>
        <br>
        <input type="texte" name="bouton" placeholder="bouton">
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
          <th scope="col">texte 1</th>
          <th scope="col">texte 2</th>
          <th scope="col">action</th>
          <th scope="col" class="text-center">méthode</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($presentation as $elem)
                    <th scope="row">{{$elem->id}}</th>
                    <td><p>{{$elem->texte}}</p></td>
                    <td><p>{{$elem->textebis}}</p></td>
                    <td><p>{{$elem->bouton}}</p></td>
                    <td><a href="/presentationHome/{{$elem->id}}/edit"><button type="submit" class="btn btn-success">edit</button></a></td>
                    <td><form action="/presentationHome/{{$elem->id}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
                  </tbody>
                  @endforeach
                </table>
  </div>
@endsection