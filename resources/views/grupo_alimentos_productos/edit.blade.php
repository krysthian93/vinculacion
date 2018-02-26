@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grupo Alimentos-Productos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($grupoAlimentosProductos, ['route' => ['grupoAlimentosProductos.update', $grupoAlimentosProductos->id], 'method' => 'patch']) !!}

                        @include('grupo_alimentos_productos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection