@extends('layouts.app')

@section('titulo')
    Regístrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex">
        <div class="md:w-1/2">
            <p>Imagen aquí</p>
        </div>

        <div class="md:w-1/2">
            <form>
                <div>
                    <label id="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu Nombre"
                        class="border p-3 w-full rounded-lg" />
                </div>
            </form>
        </div>
    </div>
@endsection
