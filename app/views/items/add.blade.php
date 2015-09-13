@extends('layouts.dashboard.dashboard')
@section('content')
<section class="content-header">
    <h1>
        Основные средства
        <small>Система ИТНК-ОБЗОР</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
        <li class="active">Основные средства</li>
    </ol>
</section>
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Ввод основного средства</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        {{ Form::open(array('url' => action('ItemsController@postAdd',$document->id), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
        <div class="box-body">
            <div class="form-group">
                <div class="os-form-group col-md-12 col-xs-12">
                    <label for="name" class="control-label">Наименование:</label>
                    <div class="input-container">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="os-form-group col-md-4 col-xs-4">
                    <label for="name" class="control-label">Инвертарный номер:</label>
                    <div class="input-container">
                        <input type="number" name="number" class="form-control">
                    </div>
                </div>
                @if(($document->os_type=='movables')||($document->os_type=='value_movables')||($document->os_type=='buildings'))
                    @include('items.okof')
                @endif
                @if($document->os_type==('parcels'))
                    @include('items.parcel')
                @endif
            </div>
            @if($document->os_type=='buildings')
                @include('items.building')
            @endif
            <div class="form-group">
                <div class="os-form-group col-md-6 col-xs-6">
                    <label for="name" class="control-label">Балансовая стоимость:</label>
                    <div class="input-container">
                        <input type="decimal" name="carrying_amount" class="form-control">
                    </div>
                </div>
                <div class="os-form-group col-md-4 col-xs-4">
                    <label for="name" class="control-label">Источник финансирования:</label>
                    <div class="input-container">
                        {{ Form::select('financing_source', Item::$os_finance, null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="os-form-group col-xs-12">
                    <label  class="control-label">Дополнительное поле:</label>
                    <textarea class="form-control" name="additional_field" rows="3" placeholder="Введите дополнительную информацию"></textarea>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Добавить основное средство</button>
        </div><!-- /.box-footer -->
        {{ Form::close() }}
    </div>

</section>
@stop