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
				@foreach ($skill as $skill)
					<div class="card">
						<div class="card-header">
							<strong>{{$skill->name}}</strong>
							<div style="float:right;display:inline-block">
								<a style="color:red;text-decoration:underline" href="">Supprimer</a>
							</div>
						</div>

						<div class="card-body">
							<strong>ID</strong> : {{$skill->id}}</br>
							<strong>Logo</strong> : {{$skill->logo}}</br>
							<strong>Description</strong> : {{$skill->description}}</br>
						</div>
					</div>
					<br>
				@endforeach
				<button type="button" data-toggle="modal" data-target="#ajouter" class='btn btn-success'>Ajouter une compétence</button>
				
				<div class="modal" id="ajouter">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<div class="modal-title">
									Ajout de compétence
								</div>
							</div>
							<form method="post" action="{{url('/skillPage/')}}">
							@csrf
						
								<div class="modal-body">
									<input type="text" name="skillName">
									<input type="text" name="skillDesc">
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary" data-dismiss="modal">Ajouter</button>
								</div>
							</form>
						</div>
					</div>
				</div>
								
				@else
					<div class="alert alert-danger" role="alert">
						Alert : Administrator Access Only
					</div>
			@endif
		</div>
	</div>
</div>

@endsection
