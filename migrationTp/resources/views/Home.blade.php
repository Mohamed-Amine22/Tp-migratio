@extends('layouts.app')
@section('content')
    <nav class=" container navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    <div class="container" >
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Liste Films</h5>
                        
                            <a href='{{route("film.create")}}' class='btn btn-primary'>
                                ajoute film 
                            </a>
                        
                        <table class="table mb-5" style="marg:10" >
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Pays</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            
                                
                            
                            <tbody>
                                @foreach ($listfilm as $film)
                                    <tr>
                                        <th scope="row">{{$film->id}}</th>
                                        <td>{{$film->titre}}</td>
                                        <td>{{$film->pays}}</td>
                                        <td>
                                    
                                                
                                                <form action="{{route('film.destroy',$film->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="flex">
                                                        <a href="{{route('film.edit',$film->id)}}">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a href="{{route('film.show',$film->id)}}">
                                                            <i class="fa-sharp fa-solid fa-circle-info" style="color: #f29c07;"></i>
                                                        </a>
                                                        <button style="border:none;background:none"><i class="fa-sharp fa-solid fa-trash" style="color: #ed0707;"></i></button> 
                                                    </div>

                                                </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection