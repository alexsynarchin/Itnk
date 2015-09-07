@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Документы
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Документы</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-8 col-xs-12">
                <div class="box row">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-file-text-o"></i> Проведенные документы</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="list table table-bordered">
                            <tbody>
                            <tr>
                                <th>
                                    №
                                </th>
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
                            <tr>
                                <td>1</td>
                                <td>Первичный ввод</td>
                                <td>08-09-2015</td>
                                <td>06-09-2015</td>
                                <td class="actions"><a href="#"><i class="fa fa-eye"></i> Просмотр</a></td>
                            </tr>
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
                <div class="box row">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-file-text-o"></i> Черновики документов</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="list table table-bordered">
                            <tbody>
                            <tr>
                                <th>
                                    №
                                </th>
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
                            <tr>
                                <td>1</td>
                                <td>Первичный ввод</td>
                                <td>08-09-2015</td>
                                <td>06-09-2015</td>
                                <td class="actions icons">
                                    <a href="#"><i class="fa fa-eye"></i></a>
                                    <a href="#"><i class="fa fa-pencil-square-o"></i> </a>
                                    <a href="#"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
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
        </div>
        <div class="col-md-4">
            <div class="box">

                <div class="box-body">
                    <a class="btn btn-primary" href="#"><i class="fa fa-plus-square-o"></i> Создать документ первичного ввода</a>
                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div>

    </section><!-- /.content -->
@stop