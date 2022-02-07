@extends('index')
 @section('content')
 
<h2>{{$nombre}}</h2>

<h1>Este personaje cuenta con el id: {{$id}}
<br>
<br>
Pertenece a la especie: {{$especie}}
<br>
<br>
Es del genero: {{$genero}}
<br>
<br>
Estado:{{$estado}}
</h1>
<br>
<img src="{{$imagen}}" alt="90">

 @endsection

 
 @section ('recomendados')
     @foreach ($personajes as $personaje)
     @if ($personaje['id']==$random1)
         
 <form action="{{route('jalar2')}}" method="post">
    @csrf
     <input type="hidden" name="id" value="{{$personaje['id']}}" >
     <input type="hidden" name="nombre" value="{{$personaje['nombre']}}">
    <input type="hidden" name="imagen" value="{{$personaje['imagen']}}">
    <input type="hidden" name="especie" value="{{$personaje['especie']}}">
    <input type="hidden" name="genero" value="{{$personaje['genero']}}">
    <input type="hidden" name="estado" value="{{$personaje['estado']}}">
    <input type="submit" value="{{$personaje['nombre']}}"></h2>
</form>
            
     
     <br>
     
     
     @endif
     @endforeach
     <br>
     @foreach ($personajes as $personaje)
     @if ($personaje['id']==$random2)
         
 <form action="{{route('jalar2')}}" method="post">
    @csrf
     <input type="hidden" name="id" value="{{$personaje['id']}}" >
     <input type="hidden" name="nombre" value="{{$personaje['nombre']}}">
    <input type="hidden" name="imagen" value="{{$personaje['imagen']}}">
    <input type="hidden" name="especie" value="{{$personaje['especie']}}">
    <input type="hidden" name="genero" value="{{$personaje['genero']}}">
    <input type="hidden" name="estado" value="{{$personaje['estado']}}">
    <input type="submit" value="{{$personaje['nombre']}}"></h2>
</form>
            
     
     <br>
     @endif
     @endforeach
     <br>
     @foreach ($personajes as $personaje)
     @if ($personaje['id']==$random3)
         
 <form action="{{route('jalar2')}}" method="post">
    @csrf
     <input type="hidden" name="id" value="{{$personaje['id']}}" >
     <input type="hidden" name="nombre" value="{{$personaje['nombre']}}">
    <input type="hidden" name="imagen" value="{{$personaje['imagen']}}">
    <input type="hidden" name="especie" value="{{$personaje['especie']}}">
    <input type="hidden" name="genero" value="{{$personaje['genero']}}">
    <input type="hidden" name="estado" value="{{$personaje['estado']}}">
    <input type="submit" value="{{$personaje['nombre']}}"></h2>
</form>  
     <br>
     @endif
     @endforeach
     <br>
     @foreach ($personajes as $personaje)
     @if ($personaje['id']==$random3)
         
 <form action="{{route('jalar2')}}" method="post">
    @csrf
     <input type="hidden" name="id" value="{{$personaje['id']}}" >
     <input type="hidden" name="nombre" value="{{$personaje['nombre']}}">
    <input type="hidden" name="imagen" value="{{$personaje['imagen']}}">
    <input type="hidden" name="especie" value="{{$personaje['especie']}}">
    <input type="hidden" name="genero" value="{{$personaje['genero']}}">
    <input type="hidden" name="estado" value="{{$personaje['estado']}}">
    <input type="submit" value="{{$personaje['nombre']}}"></h2>
</form>
            
     
     <br>
     @endif
     @endforeach
     <br>
 @endsection