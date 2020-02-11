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
				<button class='btn btn-success'>Ajouter une compétence</button>
				
				@else
					<div class="alert alert-danger" role="alert">
						Alert : Administrator Access Only
					</div>
			@endif
		</div>
	</div>
</div>

@endsection
