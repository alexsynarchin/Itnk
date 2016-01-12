@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Документ № {{$item->document->id}}
            <small>Редактирование данных основного средства</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Основные средства</li>
        </ol>
    </section>
    <section class="content">
        <div class="os static box">
            <div class="box-header with-border">

                <div class="btns ">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <a href="{{action('DocumentsController@getView',array($item->document->id))}}" class="btn btn-danger">Закрыть</a>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            {{ Form::model($item, array('url' => action('ItemsController@postUpdate', $item->id), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
            <div class="box-body">
                <div class="form-group">
                    <div class="os-form-group col-md-12 col-xs-12">
                        <label for="name" class="control-label">Наименование:</label>
                        <div class="input-container">
                            <input required="required" type="text" name="name" value="{{$item->name}}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-4 col-xs-4">
                        <label for="name" class="control-label">Инвертарный номер:</label>
                        <div class="input-container">
                            <input required="required" type="text" value="{{$item->number}}" name="number" class="form-control">
                        </div>
                    </div>
                    <div class="os-form-group col-xs-6">
                        <label for="name" class="control-label">Дата принятия к учету:</label>
                        <div class="input-container">
                            <input required="required" type="date" value="{{isset($item->os_date) ? $item->os_date:0 }}" name="os_date" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    @if(($item->document->os_type=='movables')||($item->document->os_type=='value_movables')||($item->document->os_type=='buildings')||($item->document->os_type=='car'))
                        @include('items.edit.okof-edit')
                    @endif
                    @if($item->document->os_type==('parcels'))
                        @include('items.edit.parcel-edit')
                    @endif
                </div>
                @if($item->document->os_type=='buildings')
                    @include('items.edit.building-edit')
                @endif
                @if(($item->document->os_type=='buildings')||($item->document->os_type=='parcels'))
                    @include('items.edit.address-edit')
                @endif
                @if($item->document->os_type=='car')
                    @include('items.edit.car-edit')
                @endif
                <div class="form-group">
                    <div class="os-form-group col-md-6 col-xs-6">
                        <label for="name" class="control-label">Балансовая стоимость:</label>
                        <div class="input-container">
                            <input required="required" type="decimal" value="{{$item->carrying_amount}}" name="carrying_amount" class="form-control">
                        </div>
                    </div>
                    <div class="os-form-group col-md-4 col-xs-4">
                        <label for="name" class="control-label">Источник финансирования:</label>
                        <div class="input-container">
                            {{ Form::select('financing_source', Item::$os_finance, null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                @if(($item->document->os_type=='movables')||($item->document->os_type=='value_movables')||($item->document->os_type=='buildings')||($item->document->os_type=='car'))
                    <div class="form-group">
                        <div class="os-form-group col-xs-6 col-md-6 col-lg-6 ">
                            <label class="control-label">Дата ввода в эксплуатацию</label>
                            <div class="input-container">
                                <input  type="date" value="{{isset($item->variable->exploitation_date)?$item->variable->exploitation_date:0 }}" name="exploitation_date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="os-form-group col-md-5 col-xs-5">
                            <label for="name" class="control-label">Остаточная стоимость:</label>
                            <div class="input-container">
                                <input  type="decimal" value="{{isset($item->variable->residual_value)? $item->variable->residual_value : 0}}" name="residual_value" class="form-control">
                            </div>
                        </div>
                        <div class="os-form-group col-md-3 col-xs-3">
                            <label for="name" class="control-label">Месячная норма, %:</label>
                            <div class="input-container">
                                <input required="required" value="{{isset($item->variable->monthly_rate) ? $item->variable->monthly_rate : 0}}" type="decimal" name="monthly_rate" class="form-control">
                            </div>
                        </div>
                        <div class="os-form-group col-md-4 col-xs-4">
                            <label for="name" class="control-label">Срок полезного использования:</label>
                            <div class="input-container">
                                <input  required="required" type="number" value="{{isset($item->variable->useful_life) ? $item->variable->useful_life : 0}}" name="useful_life" class="form-control">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <div class="os-form-group col-xs-12">
                        <label  class="control-label">Дополнительное поле:</label>
                        <textarea class="form-control" name="additional_field"  rows="3" placeholder="Введите дополнительную информацию">{{$item->additional_field}}</textarea>
                    </div>
                </div>
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Сохранить Основное средство</button>
            </div><!-- box-footer -->
            {{ Form::close() }}
        </div><!-- /.box -->

    </section>
@stop
