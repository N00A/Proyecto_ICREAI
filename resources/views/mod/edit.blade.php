@extends('layouts.layout')
@section('title','Icreai Editar Estados')
@section('title_princ','Editar Estados')
@section('pp')
<div class="row">
    <div class="content">
        <div class="col-md-6 col-md-offset-3">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-info">
                {{Session::get('success')}}
            </div>
            @endif
            <div class="panel panel-default formSeparacion">
                <div class="panel-body textCenter">
                    <div class="row">
                        <form method="POST" action="{{ route('moderador.update',$users->id) }}" role="form">
                            {{ csrf_field() }}
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="row">
                                <h4 class="textCenter">El estado en 1 significa Acceso a la App.</h4>
                                <h4 class="textCenter">El estado en 0 significa Usuario Bloqueado.</h4>
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="form-group">
                                        <input type="number" min="0" max="1" name="activo" id="activo" class="form-control inputsm textCenter" value="{{$users->activo}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Actualizar" class="btn btn-success colorbtn">
                                <a href="{{ route('moderador.index') }}" class="btn btn-info colorbtn">Atrás</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection