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

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box ">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-file-text-o"></i> Основные средства</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body ">
                        <table class="list table table-bordered table-striped table-hover">
                            <tr>
                                <th>Наименование</th>
                                <th>Инвентарный номер</th>
                                <th>Код ОКОФ</th>
                                <th>Балансовая стоимость</th>
                                <th>Остаточная стоимость</th>
                                <th>Дата ввода в эксплуатацию</th>
                                <th>Действия</th>
                            </tr>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{{$item->name}}}</td>
                                    <td>{{{$item->number}}}</td>
                                    <td>{{{$item->okof}}}</td>
                                    <td>{{{isset($item->carrying_amount)? $item->carrying_amount: 0}}}</td>
                                    <td>{{{isset($item->variable->residual_value)? $item->variable->residual_value:0}}}</td>
                                    <td></td>
                                    <td class="actions icons"><a href="{{action('ItemsController@getView',array($item->id))}}"><i class="fa fa-eye"></i></a><a href="{{action('ItemsController@getEdit',array($item->id))}}"><i class="fa fa-pencil-square-o"></i></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
@stop
