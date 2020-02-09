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
<<<<<<< HEAD
				@if (Auth::user()->isAdmin == 1)
				@endif
=======
>>>>>>> c2af7ff6f054ad1817d04834acc38ee423674011
			
            <a  class="btn btn-secondary" href="{{ url('/users')}}">Voir ton user</a>
			</br>
            <a  class="btn btn-secondary" href="{{ url('/skills')}}">Voir tous les users</a>
        </div>
		</div>
    </div>
</div>
@endsection

