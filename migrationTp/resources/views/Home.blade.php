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
                        
                            <a href='/create' class=' border border-2'>
                                ajoute film 
                            </a>
                        
                        <table class="table mb-5" style="marg:10" >
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">titre</th>
                                <th scope="col">pays</th>
                                <th scope="col">action</th>
                              </tr>
                            </thead>
                            
                                
                            
                            <tbody>
                                @foreach ($listfilm as $film)
                                    <tr>
                                        <th scope="row">{{$film->id}}</th>
                                        <td>{{$film->titre}}</td>
                                        <td>{{$film->pays}}</td>
                                        <td>
                                            <div class="flex ">
                                                <a href="/edit/{{$film->id}}">
                                                    modifier
                                                </a>
                                                <form action="{{route('delete',$film->id )}}" method="get">
                                                    @csrf
                                                    <button type="submit">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>
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