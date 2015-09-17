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
                <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-file-text-o"></i> Документы</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="list table table-bordered">
                        <tbody>
                        <tr>
                            <th>Номер</th>
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
                                    <td>{{$document->id}}</td>
                                    <td>{{ Document::$os_types[$document->os_type] }}</td>
                                    <td>{{$document->document_date}}</td>
                                    <td>{{$document->actual_date}}</td>
                                    <td class="actions icons">
                                        <a href="{{action('DocumentsController@getView', [$document->id])}}"><i class="fa fa-eye"></i></a>
                                        <a href="{{action('DocumentsController@getView',array($document->id))}}"><i class="fa fa-pencil-square-o"></i> </a>
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
                @foreach ($items as $item)
                    <tr>
                        <td>{{{$item->name}}}</td>
                        <td>{{{$item->number}}}</td>
                        <td>{{{$item->okof}}}</td>
                        <td>{{{$item->carrying_amount}}}</td>
                        <td></td>
                        <td></td>
                        <td class="actions icons"><a href="{{action('ItemsController@getView',array($item->id))}}"><i class="fa fa-eye"></i></a><a  class="action switalert"><i class="fa fa-trash"></i></a></td>
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
</section>
@stop
@section('user-scripts')
    @if ($items->count())
        <script>
            $('.switalert').on('click', function(){
                swal({   title: "Удаление ОС",   text: "Вы уверены что хотите удалить основное средство",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",cancelButtonText:"Отмена",   confirmButtonText: "Да, удалить!",   closeOnConfirm: false },function(isConfirm) {
                    if (isConfirm) {
                        return window.location.href='{{action('ItemsController@getDelete',array($item->id))}}'
                    }
                });
            })
        </script>
    @endif
    @if ($documents->count())
        <script>
            $('.switalert1').on('click', function(){
                swal({   title: "Удаление ОС",   text: "Вы уверены что хотите удалить документ",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",cancelButtonText:"Отмена",   confirmButtonText: "Да, удалить!",   closeOnConfirm: false },function(isConfirm) {
                    if (isConfirm) {
                        return window.location.href='{{action('DocumentsController@getDelete',array($document->id))}}'
                    }
                });
            })
        </script>
    @endif
@stop