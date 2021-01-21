@extends('adminlte::page')

@section('content')
    <h1 class="text-center">Modification du contact</h1>

    <div class="container  text-center pt-2">
        <div class="container w-50">
        <form action="/contact/{{$contact->id}}" method="post">
                @method('PUT')
                @csrf
                <br>
                <br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="maps" placeholder="maps"></textarea>
                
                <br>
                <button type="submit" class="btn btn-success mt-3">Modifier</button>

            </form>
        </div>
    </div>  
@endsection