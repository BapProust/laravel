@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<a class="btn btn-secondary" href="{{ url('/home')}}"><- Retour</a><br><br>
					
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif
			@if (Auth::user()->isAdmin == 1)
				@foreach ($user as $user)
					<div class="card">
						<div class="card-header">
							<strong>{{$user->firstname}} {{$user->lastname}}</strong>
							<div style="float:right;display:inline-block">
								<a style="color:red;text-decoration:underline" href="{{ url('/skills/'.$user->id.'/')}}">Supprimer</a>
							</div>
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
                                         
							<button class="btn btn-success" data-toggle="modal" data-target="#ajouter">Ajouter une compétence</button>
                                              
              <div class="modal" id="ajouter">
      					<div class="modal-dialog">
      						<div class="modal-content">
      							<div class="modal-header">
      								<div class="modal-title">
      									Ajout de compétence
      								</div>
      							</div>
      							<form method="post" action="{{url('/skills/' . $user->id . '/')}}">
      							@csrf
      						
      								<div class="modal-body">
                        <p>Skill : <select name="skillName">
                           @foreach($skills as $skill)
                             <option value="{{$skill->id}}">{{$skill->name}}</option>
                           @endforeach
                           </select>
                        </p><br>
                        <p>Niveau : <input type="number" min="1" max="5" name="skillLvl" required></p>
      								</div>
      								<div class="modal-footer">
      									<button type="submit" class="btn btn-primary">Ajouter</button>
      								</div>
      							</form>
      						</div>
      					</div>
      				</div>
   				        
						</div>
					</div>
					<br>
				@endforeach
				
			@else
				<div class="alert alert-danger" role="alert">
					Alert : Administrator Access Only
				</div>
			@endif
		</div>
	</div>
</div>

@endsection
