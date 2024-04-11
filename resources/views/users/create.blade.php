@extends('layouts.main')
@section('content')



<div class="container">
    <x-header-component   titulo="Crear Usuario" > </x-header-component>

    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-6">
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo dolorum unde architecto rem recusandae labore maiores odit voluptatum laudantium? Corporis eaque voluptatum totam error quam reiciendis mollitia consectetur accusamus eos!</p>
        </div>
    </div>
</div>


@endsection


@section('breadcrumb')

<div class="container py4">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


@endsection

