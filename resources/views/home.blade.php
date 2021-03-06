@extends('layouts.app')
<meta charset="utf-8">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
			
            <a  class="btn btn-secondary" href="{{ url('/users')}}">Voir ton user</a>
			@if (Auth::user()->isAdmin == 1)
				</br>
				<a  class="btn btn-secondary" href="{{ url('/skills')}}">Voir tous les users</a>
				<br>
				<a class="btn btn-secondary" href="{{ url('/skillPage')}}">Voir tous les skills</a>
			@endif
		</div>
		</div>
    </div>
</div>
@endsection

