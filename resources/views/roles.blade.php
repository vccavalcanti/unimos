@extends('layouts.app')


@section('content')
    <span>prof </span>
    <input type="checkbox" {{ Auth::user()->hasRole('professor') ? 'checked' : '' }} name="prof">
    <span>art</span>
    <input type="checkbox" {{ Auth::user()->hasRole('articulador') ? 'checked' : '' }} name="art">
    contr
    <input type="checkbox" {{ Auth::user()->hasRole('contratante') ? 'checked' : '' }} name="contr">
    unidade
    <input type="checkbox" {{ Auth::user()->hasRole('unidadeEnsino') ? 'checked' : '' }} name="unidade">
    admin
    <input type="checkbox" {{ Auth::user()->hasRole('superadministrator') ? 'checked' : '' }}  name="admin">


    @role('superadministrator')
    <p>This is visible to users with the admin role. Gets translated to
        \Laratrust::role('admin')</p>
    @endrole

    @role('professor')
    <p>This is visible to users with the PROFESSOOOOR role. Gets translated to
        \Laratrust::role('admin')</p>
    @endrole

@endsection