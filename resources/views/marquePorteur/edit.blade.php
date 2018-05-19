@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Moteur
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($moteur, ['route' => ['moteurs.update', $moteur->id], 'method' => 'patch']) !!}

                        @include('moteurs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection