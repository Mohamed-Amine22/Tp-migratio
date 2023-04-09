@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center">{{$Film->titre}}</h1>
                    <h1>{{$Film->pays}}</h1>
                    <h1>{{$Film->id}}</h1>
                    <h1>{{$Film->annee}}</h1>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection