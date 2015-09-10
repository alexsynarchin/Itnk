@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Главная страница
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Главная</li>
        </ol>
    </section>

    <!-- Main content -->
<section class="content">
            <div class="box ">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-file-text-o"></i> Основные средства</h3>
                </div><!-- /.box-header -->
                <div class="box-body ">
                    <table class="list table table-bordered table-striped">
                        <tr>
                            <th>Наименование</th>
                            <th>Инвентарный номер</th>
                            <th>Код ОКОФ</th>
                            <th>Балансовая стоимость</th>
                            <th>Остаточная стоимость</th>
                            <th>Дата ввода в эксплуатацию</th>
                            <th>Действия</th>
                        </tr>
                        @foreach ($os_movables as $os_movable)
                        <tr>
                            <td>{{$os_movable->name}}</td>
                            <td>{{$os_movable->number}}</td>
                            <td align="center">{{$os_movable->okof}}</td>
                            <td align="center">{{$os_movable->carrying_amount}}</td>
                            <td align="center"></td>
                            <td align="center"></td>
                            <td class="actions"><a href="btn btn-default"><i class="fa fa-eye"></i> Просмотр</a></td>
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

                <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-file-text-o"></i> Документы</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="list table table-bordered">
                        <tbody>
                        <tr>
                            <th>
                                Вид документа
                            </th>
                            <th>
                                Дата документа
                            </th>
                            <th>
                                Дата актуализации остатков
                            </th>
                            <th>Действия</th>
                        </tr>
                        @if($documents->count())
                            @foreach($documents as $document)
                                <tr>
                                    <td>{{ Document::$os_types[$document->os_type] }}</td>
                                    <td>{{$document->document_date}}</td>
                                    <td>{{$document->actual_date}}</td>
                                    <td class="actions icons">
                                        <a href="{{action('DocumentsController@getView', [$document->id])}}"><i class="fa fa-eye"></i></a>
                                        <a href="{{action('DocumentsController@getEdit',array($document->id))}}"><i class="fa fa-pencil-square-o"></i> </a>
                                        <a href="{{action('DocumentsController@getDelete',array($document->id))}}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody></table>
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
</section>
@stop