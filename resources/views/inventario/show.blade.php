@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? 'Show Inventario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $inventario->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $inventario->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $inventario->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
