@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           <b>Показать:</b>  Cat
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('cats.show_fields')
                    <a href="{!! route('cats.index') !!}" class="btn btn-default">Назад</a>
                    <a href="{!! route('cats.edit', [$cat->id]) !!}" class='btn btn-default'>Изменить</a>
                </div>
            </div>
        </div>
    </div>
@endsection
