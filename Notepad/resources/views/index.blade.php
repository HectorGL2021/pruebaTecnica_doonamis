@extends('plantillas.plantilla')

@section('titulo',"cursos")

@section('contenido')
@include('partials.mensajes')

<div class="card mt-2">
    <h5 class="col-sm-1 mt-2"><b>Buscar</b></h5>
    <form action="{{ action([App\Http\Controllers\NotasController::class,'index']) }}">
        <div class="card-body">
            <div class="form-group row">
                <label for="cicle" class="col-sm-1 col-form-label">Nota</label>
                <div class="col-sm-8">
                    <select id="inputCicles" class="form-control" name="inputCicles">
                        <option selected>Tots els cicles</option>
                        @foreach ($notas as $nota)
                            <option>{{ $nota->nom }}</option>
                        @endforeach

                      </select>
                </div>
                @if (old('actiuBuscar')=='actiu')
                <div class="col-sm-1 mt-2" >
                    <input class="form-check-input" type="checkbox" id="actiuBuscar" name="actiuBuscar" value="actiu" checked>
                    <label class="form-check-label" for="actiuBuscar">Actiu</label>
                </div>
                @else
                <div class="col-sm-1 mt-2" >
                    <input class="form-check-input" type="checkbox" id="actiuBuscar" name="actiuBuscar" value="actiu">
                    <label class="form-check-label" for="actiuBuscar">Actiu</label>
                </div>
                @endif

                <div class="col-sm-1" >
                    <button type="submit" class="btn btn-secondary"><i class="fas fa-search">Buscar</i></button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card mt-2">
    <h5 class="col-sm-2 mt-2"><b>Notas</b></h5>
    <div class="card-body">
        @if (count($cursos)>0)
        <table class="table mt-2">
            <thead>
            <tr>
                <th scope="col">Sigles</th>
                <th scope="col">Nom</th>
                <th scope="col">Cicle</th>
                <th scope="col">Actiu</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $notas)
                <tr>

                    <td>{{$notas->sigles }}</td>
                    <td>{{$notas->nom}}</td>
                    <td>{{$notas->cicles }}</td>
                    <td>
                        @if($notas->actiu)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu" checked>
                            <label class="custom-control-label" for="actiu"></label>
                        </div>
                        @else
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu">
                            <label class="custom-control-label" for="actiu"></label>
                        </div>
                        @endif
                    </td>
                    <td>
                        <form class="float-right ml-1" action="{{ action([App\Http\Controllers\NotasController::class,'edit'],['cur'=>$notas->id]) }}" method="GET" >
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i>Editar</button>
                        </form>
                            <button type="submit" class="btn btn-danger delete" data-toggle="modal" data-target="#exampleModal"
                            data-sigles="{{ $notas->sigles }}"
                            data-action="{{ action([App\Http\Controllers\NotasController::class,'destroy'],['cur'=>$notas->id]) }}">
                            <i class="fas fa-trash"></i>Esborrar</button>
                        </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url('notas/create') }}"  class="btn btn-primary" style="float: right"><i class="fas fa-plus-circle"></i>Nou cicle</a>
        {{ $cursos->links() }}
        @else
        <div class="alert alert-light" role="alert">No hi ha cap notas per la cerca realitzada</div>
        @endif
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Estas segur que vols esborrar el notas</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form class="delete-form" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Esborrar</button>
        </form>
        </div>
      </div>
    </div>
</div>


@endsection
