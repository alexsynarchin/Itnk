@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Первичный ввод
            <small>{{Document::$os_types[$document->os_type] }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Документы</li>
        </ol>
    </section>
    <section class="content">

        <div class="document box">
            <div class="box-header with-border">
                <div class="form-group">
                    <div class="os-form-group col-xs-1">
                        <label class="control-label">№: {{$document->id}}</label>
                    </div>
                    <div class="os-form-group col-xs-3">
                        <label class="control-label">Дата документа:</label><span class="date">{{$document->document_date}}</span>
                    </div>
                    <div class="os-form-group col-xs-4">
                        <label class="control-label">Дата актуализации остатков:</label><span class="date">{{$document->actual_date}}</span>
                    </div>
                    <div class="col-xs-3"><a href="{{action('DocumentsController@getEdit',array($document->id))}}" class="edit-btn btn btn-warning">Редактировать документ</a> </div>
                </div>

                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class="label label-danger">Черновик</span>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="control-bnts row">
                    <div class="col-xs-4">
                        @if($document->os_type==('movables'||'value_movables||buildings'))

                            <a href="{{action('ItemsController@getAdd', [$document->id])}}" class="add-btn btn btn-primary"><i class="fa fa-plus-square-o"></i> Добавить основное средство</a>

@endif
                    </div>
                </div>
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
                            <td>{{{$item->carrying_amount}}}</td>
                            <td>{{{$item->variable->residual_value}}}</td>
                            <td></td>
                            <td class="actions icons"><a href="{{action('ItemsController@getView',array($item->id))}}"><i class="fa fa-eye"></i></a><a href="{{action('ItemsController@getEdit',array($item->id))}}"><i class="fa fa-pencil-square-o"></i></a><a  class="action switalert"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach

                </table>
            </div><!-- /.box-body -->
            <div class="box-footer">

            </div><!-- box-footer -->
        </div><!-- /.box -->


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
@stop