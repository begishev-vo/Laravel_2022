@extends('layouts.admin')
@section('title') Список новостей @endsection
@section('header')
    <h1 class="h2">Список новостей</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ asset('admin.news.create') }}"
               type="button" class="btn btn-sm btn-outline-secondary">Добавить новость</a>
        </div>

    </div>
@endsection
@section('content')
@endsection
