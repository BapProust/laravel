@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 <a  class="btn btn-secondary" href="{{ url('/home')}}">Retour</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
                    @foreach ($user as $user)
                    <strong>Id : {{$user->id}}</strong></br>
                    <strong>Prenom</strong> : {{$user->firstname}}</br>
                    <strong>Nom de famille</strong> : {{$user->lastname}}</br>
                    <strong>Email</strong> : {{$user->email}}</br>
					
                      @foreach($user->skills as $skill)
					  
					  <form method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'>
					  <div class="card-body">
                      <strong>Competence</strong> : {{$skill->name}}</br>
                      <strong>Description</strong> : {{$skill->description}}</br>
                      <strong>Niveau</strong> : <input type='number' name='skillLevel' value='{{$skill->pivot->level}}'></input></br>
					  <a class="btn btn-danger" href='{{}}'>Supprimer</a>
					  <a class="btn btn-info" href=''{{}}>Editer</a>
					  </form>
					  
                      @endforeach
					  
					  </div>
					  
					  <button class='btn btn-success'>Ajouter</button>
					  <div>___________________________________</div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
