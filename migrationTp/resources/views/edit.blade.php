@extends('layouts.app')

@section('content')

        <div class="container" >
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Edit Film</h5>

                            <form action="{{route('update', $film->id )}}" method="post">
                                @csrf
                                <div class="mb-3">
                                <label  class="form-label">Titre</label>
                                <input type="text" value="{{$film->titre}}" class="form-control" name="titre" >
                                </div>
                                <div class="mb-3">
                                <label  class="form-label">Pays</label>
                                <input type="text" value="{{$film->pays}}" class="form-control" name="pays" >
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
@endsection