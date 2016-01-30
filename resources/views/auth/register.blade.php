@extends('store.template')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
 
                <div class="panel-body">
                	@include('store.partials.errors')

                    {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!}

                        <div class="form-group">
                            <label>Nombre</label>
                            {!! Form::input('text', 'name', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            {!! Form::input('text', 'last_name', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Nombre Usuario</label>
                            {!! Form::input('text', 'user', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            {!! Form::password('password', ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Confirma tu Password</label>
                            {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            {!! Form::input('text', 'address', '', ['class'=> 'form-control']) !!}
                        </div>

                        <div>
                            {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection