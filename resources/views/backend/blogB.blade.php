@extends('adminlte::page')

@section('content')
<form action="/blog" method="post" enctype="multipart/form-data">
@csrf
     <div style="height: 200px" class="container w-50 text-center pb-5">
        <h1 class="text-center">Rajout de texte 'blog'</h1>
        <br>
        <br>
        <input type="text" name="titre">
        <br>
        <br>
        <input type="file" name="src" id="">
        <br>
        <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte" placeholder="rentrer votre texte"></textarea>
        <br>
        <select multiple="" class="form-control" name="tag[]">
          @foreach ($tag as $item)
              <option value="{{$item->id}}"  {{ in_array($item->id, old('tag') ?: []) ? 'selected' : '' }}>{{$item->tag}}</option>
          @endforeach
        </select>
        <br>
        <br>
        <select multiple="" class="form-control" name="cat[]">
          @foreach ($cat as $item)
              <option value="{{$item->id}}"  {{ in_array($item->id, old('cat') ?: []) ? 'selected' : '' }}>{{$item->cat}}</option>
          @endforeach
      </select>

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
          <th scope="col">titre</th>
          <th scope="col">src</th>
          <th scope="col">texte</th>
          <th scope="col">tag</th>
          <th scope="col">cat</th>
          <th scope="col" class="text-center">méthode</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($blog as $elem)
        <th>{{$elem->id}}</th>
        <th>{{$elem->titre}}</th>
        <th>{{$elem->src}}</th>
        <th>{{$elem->texte}}</th>


        @foreach ($elem->tag as $item)
          <th scope="row w-100">{{$item->tag}}</th>
        @endforeach
        @foreach ($elem->cat as $item)
          <th scope="row w-100">{{$item->cat}}</th>
        @endforeach
                    <td><a href="/blog/{{$elem->id}}/edit"><button type="submit" class="btn btn-success">edit</button></a></td>
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