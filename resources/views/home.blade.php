@extends('adminlte::page')

@section('title', 'AdminLTE')



@if(Auth::user()->role_id === 3)

    

    @section('content')
        <h1 class='text-center mt-5'>veuillez attendre la validation de l'admin</h1>
    @stop   

@else

    @section('content_header')
        <h1>Dashboard</h1>
    @stop

    @section('content')
        <p>You are logged in!</p>
    @stop

@endif