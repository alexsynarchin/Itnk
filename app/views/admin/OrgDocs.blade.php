@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>{{$organization -> short_name}}  <small>Система ИТНК-ОБЗОР</small></h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="document box">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-file-text-o"></i> Документы первичного ввода</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="control-bnts row">
                    <div class="col-xs-4">
                        <a class="add-btn btn btn-primary" href="{{action('AdminController@getDocAdd', [$organization->user->id])}}"><i class="fa fa-plus-square-o"></i> Создать документ первичного ввода</a>
                    </div>
                </div>
                <table class="list table table-bordered table-hover">
                   <thead>
                   <tr>
                       <th>Номер</th>
                       <th>
                           Вид Основных средств
                       </th>
                       <th>
                           Дата документа
                       </th>
                       <th>
                           Дата актуализации остатков
                       </th>
                       <th>Действия</th>
                   </tr>
                   </thead>
                    <tbody>
                    @if($documents->count())
                        @foreach($documents as $document)
                            <tr>
                                <td>{{$document->id}}</td>
                                <td>{{ Document::$os_types[$document->os_type] }}</td>
                                <td>{{$document->document_date}}</td>
                                <td>{{$document->actual_date}}</td>
                                <td class="actions icons">
                                    <a href="{{action('AdminController@getDocView', [$document->id])}}"><i class="fa fa-eye"></i></a>
                                    <a href="{{action('AdminController@getDocEdit',array($document->id))}}"><i class="fa fa-pencil-square-o"></i> </a>
                                    <a  class="action switalert1"><i class="fa fa-trash"></i></a>
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
    </section><!-- /.content -->
@stop
@section('user-scripts')
@stop