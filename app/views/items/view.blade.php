@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
           Документ № {{$item->document->id}}
            <small>страница учета основного средства</small>
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
                        @if(Auth::user() -> username == '1-0275071849')
                            <a href="{{action('OssController@getDocView',array($item->document->id))}}" class="btn btn-danger">Закрыть</a>
                        @else
                        <a href="{{action('DocumentsController@getView',array($item->document->id))}}" class="btn btn-danger">Закрыть</a>
                        @endif
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row form-group">
                        <div class="os-form-group col-xs-12">
                            <label class="control-label">Наименование:</label>
                            <div class="input-container">
                                <span >{{$item->name}}</span>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="os-form-group col-xs-6">
                            <label class="control-label">Инвертарный номер:</label>
                            <div class="input-container">
                                <span >{{$item->number}}</span>
                            </div>
                            <hr>
                        </div>
                        <div class=" os-form-group col-xs-6">
                            <label class="control-label">Раздел учета ОС:</label>
                            <div class="input-container">
                                <span >{{Document::$os_types[$item->document->os_type]}}</span>
                            </div>
                            <hr>
                        </div>
                    </div>
                    @if(($item->document->os_type=='movables')||($item->document->os_type=='value_movables')||($item->document->os_type=='buildings')||($item->document->os_type=='car'))
                        <div class="row form-group">
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Код ОКОФ:</label>
                                <div class="input-container">
                                    <span >{{$item->okof}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                    @endif
                    @if($item->document->os_type=='buildings')
                        <div class="row form-group">
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Назначение:</label>
                                <div class="input-container">
                                    <span >{{$item->building->appointment}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Материал стен:</label>
                                <div class="input-container">
                                    <span >{{$item->building->wall_material}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Этажность:</label>
                                <div class="input-container">
                                    <span >{{$item->building->floors}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Год постройки:</label>
                                <div class="input-container">
                                    <span >{{$item->building->date_construction}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                    @endif
                    @if($item->document->os_type=='parcels')
                        <div class="row form-group">
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Кадастровый номер:</label>
                                <div class="input-container">
                                    <span >{{$item->parcel->cadastral}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Назначение земель:</label>
                                <div class="input-container">
                                    <span >{{$item->parcel->assigning_land}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Кадастровый номер:</label>
                                <div class="input-container">
                                    <span >{{$item->parcel->cadastral}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Площадь:</label>
                                <div class="input-container">
                                    <span >{{$item->parcel->area}}</span>
                                </div>
                                <hr>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="os-form-group col-xs-12">
                                <label class="control-label">Назначение земель:</label>
                                <div class="input-container">
                                    <span >{{$item->parcel->assigning_land}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                    @endif
                    @if(($item->document->os_type=='buildings')||($item->document->os_type=='parcels'))
                        <div class="row form-group">
                            <div class="os-form-group col-xs-12">
                                <label class="control-label">Адрес:</label>
                                <div class="input-container">
                                    <span >{{$item->address->state}}, {{$item->address->district}}, {{$item->address->city}}, {{$item->address->street}}, {{$item->address->building_number}}, {{$item->address->building_number_2}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                    @endif
                    <div class="row form-group">
                        <div class="os-form-group col-xs-6">
                            <label class="control-label">Балансовая стоимость:</label>
                            <div class="input-container">
                                <span >{{$item->carrying_amount}}</span>
                            </div>
                            <hr>
                        </div>
                        <div class="os-form-group col-xs-6">
                            <label class="control-label">Источник финансирования:</label>
                            <div class="input-container">
                                <span >{{Item::$os_finance[$item->financing_source]}}</span>
                            </div>
                            <hr>
                        </div>
                    </div>
                    @if(($item->document->os_type=='movables')||($item->document->os_type=='value_movables')||($item->document->os_type=='buildings')||($item->document->os_type=='car'))
                        <div class="row form-group">
                            <div class="os-form-group col-xs-6">
                                <label class="control-label">Дата ввода в эксплуатацию </label>
                                <div class="input-container">
                                <span>
                                    @if($item->variable->exploitation_date != 0){{$item->variable->exploitation_date}}
                                    @else Не введено в эксплуатацию
                                    @endif
                                </span>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="os-form-group col-xs-5">
                                <label class="control-label">Остаточная стоимость:</label>
                                <div class="input-container">
                                    <span >{{isset($item->variable->residual_value) ? $item->variable->residual_value: ""}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-3">
                                <label class="control-label">Месячная норма:</label>
                                <div class="input-container">
                                    <span >{{isset($item->variable->monthly_rate) ? $item->variable->monthly_rate : ""}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-4">
                                <label class="control-label">Срок полезного использования:</label>
                                <div class="input-container">
                                    <span >{{isset($item->variable->useful_life) ? $item->variable->useful_life : ""}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                    @endif
                    @if($item->document->os_type=='car')
                        <div class="row form-group">
                            <div class="os-form-group col-xs-5">
                                <label class="control-label">Марка:</label>
                                <div class="input-container">
                                    <span >{{$item->car->brand}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-3">
                                <label class="control-label">Модель:</label>
                                <div class="input-container">
                                    <span >{{$item->car->model}}</span>
                                </div>
                                <hr>
                            </div>
                            <div class="os-form-group col-xs-4">
                                <label class="control-label">Год выпуска:</label>
                                <div class="input-container">
                                    <span >{{$item->car->manufacture_year}}</span>
                                </div>
                                <hr>
                            </div>
                        </div>
                    @endif
                    <div class="row form-group">
                        <div class="os-form-group col-xs-12">
                            <label class="control-label">Дополнительное поле:<hr></label>
                            <div class="input-container">
                                <span>{{$item->additional_field}}</span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- box-footer -->
            </div><!-- /.box -->

    </section>
@stop