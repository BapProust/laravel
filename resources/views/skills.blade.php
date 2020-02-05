@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                
                <div class="card-body">
					
					<a class="btn btn-secondary" href="{{ url('/home')}}"><- Retour</a>
					
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @foreach ($user as $user)
						<div class="card">
							<div class="card-header">
								<strong>Id : {{$user->id}}</strong></br>
							</div>

							@php
								$i = 0
							@endphp
							<div class="card-body">
								<strong>Prenom</strong> : {{$user->firstname}}</br>
								<strong>Nom de famille</strong> : {{$user->lastname}}</br>
								<strong>Email</strong> : {{$user->email}}</br>
								@foreach($user->skills as $skill)
									@php
										++$i
									@endphp
									<div class="card">
										<div class="card-header">
											<strong>Competence</strong> : {{$skill->name}}</br>
										</div>
										<div class="card-body">
										<form action="{{}}" method="get">
											<strong>Description</strong> : {{$skill->description}}</br>
											<strong>Niveau</strong> : <input type='number' name='skillLevel' value='{{$skill->pivot->level}}'></input></br>
											<a class="btn btn-danger" href="{{ url('/skills/'.$user->id.'/'.$i.'/') }}">Supprimer</a>
											<a class="btn btn-info" href="{{ url('/skills/'.$user->id.'/'.$i.'/'.input('skillLevel')) }}">Editer</a>
										</form>
										</div>
									</div>
								@endforeach
								<button class='btn btn-success'>Ajouter une compétence</button>
							</div>
						</div>
					@endforeach
                </div>        
            </div>
		</div>
	</div>
</div>

@endsection
