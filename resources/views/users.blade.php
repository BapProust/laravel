@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		
		<a  class="btn btn-secondary" href="{{ url('/home')}}">Retour</a><br><br>
			@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif
			
			<div class="card">
				<div class="card-header">
					<strong>{{$user->firstname}} {{$user->lastname}}</strong
				</div>

				<div class="card-body">
					<strong>ID</strong> : {{$user->id}}</br>
					<strong>Email</strong> : {{$user->email}}</br>
					@foreach($user->skills as $skill)
						
						<div class="card" style="margin-top:.5rem; margin-bottom:.5rem">
							<div class="card-header">
								<strong>{{$skill->name}}</strong>
								<div style="float:right;display:inline-block">
									<a style="color:red;text-decoration:underline" href="{{url('/skills/'.$user->id.'/'.$skill->id.'/')}}">Supprimer</a>
								</div>
							</div>
							<div class="card-body">
							<form method="post" action="{{url('/skills/' . $user->id . '/' . $skill->id .'/')}}" style="margin-bottom:0">
							@csrf
								<div style="margin-bottom:.5rem">
									<strong>Description</strong> : {{$skill->description}}</br>
									<strong>Niveau</strong> : <input type='number' min="1" max="5" name='skillLevel' value='{{$skill->pivot->level}}'></input></br>
								</div>
								<input type='submit' class="btn btn-info" value="Editer"></input>
							</form>
							</div>
						</div>
					@endforeach
					<button class='btn btn-success'>Ajouter une compétence</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
