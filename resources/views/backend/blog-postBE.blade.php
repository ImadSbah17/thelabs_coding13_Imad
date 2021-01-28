@extends('adminlte::page')

@section('content')
    <form action="/blog/{{$blog->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')

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
            <button type="submit" class="btn btn-success text-center">modifier</button>
        </div>
    </form>
 
@endsection