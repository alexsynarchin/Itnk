@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Справочник ОКОФ
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Справочник ОКОФ</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <ul>
            @foreach($items as $item)
                <li>{{ $item->name }}
                @foreach($item['children'] as $child)
                    <li>{{ $child->name }}</li>
                    @endforeach
                        </li>
                @endforeach
        </ul>
    </section>
@stop