@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
           Администрирование
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Администрирование</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="document box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-file-text-o"></i> Организации</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="control-bnts row">
                    <div class="col-xs-4">
                        <a class="add-btn btn btn-primary" href="/organization/add"><i class="fa fa-plus-square-o"></i> Добавить организацию</a>
                    </div>
                </div>
                <table class="list table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Название</th>
                            <th>ИНН</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                        @foreach ($organizations as $organization)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{{$organization->short_name}}}</td>
                                <td>{{{$organization->inn}}}</td>
                                <td class="actions icons"><a href="{{action('AdminController@getOrgView',array($organization->id))}}"><i class="fa fa-eye"></i></a>  <a href="{{action('AdminController@getEdit',array($organization->id))}}"><i class="fa fa-pencil-square-o"></i> </a> <a href="{{action('AdminController@getOrgDocs',array($organization->id))}}"><i class="fa fa-file-text-o"></i></a></td>
                            </tr>
                            <?php $i=$i+1;?>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">

            </div>
        </div>
    </section>
@stop
