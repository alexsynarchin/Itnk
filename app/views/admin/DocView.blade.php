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
    <h3>{{$organization->short_name}}</h3>
        <div class="document box">
            <div class="box-header with-border">
                <div class="form-group">
                    <div class="os-form-group col-xs-1">
                        <label class="control-label">№: {{$document->document_number}}</label>
                    </div>
                    <div class="os-form-group col-xs-3">
                        <label class="control-label">Дата документа:</label><span class="date">{{$document->document_date}}</span>
                    </div>
                    <div class="os-form-group col-xs-4">
                        <label class="control-label">Дата актуализации остатков:</label><span class="date">{{$document->actual_date}} </span>
                    </div>
                    <div class="col-xs-3"><a href="{{action('AdminController@getDocEdit',array($document->id))}}" class="edit-btn btn btn-warning">Редактировать документ</a> </div>
                </div>

                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class="label label-danger">Черновик</span>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="control-bnts row">
                    <div class="col-xs-12">
                         <a href="{{action('AdminController@getOrgDocs',[$document->user->organization_id])}}" class="add-btn btn btn-success">Сохранить документ</a>
                        <a href="{{action('AdminController@getOrgDocs',[$document->user->organization_id])}}" class="add-btn btn btn-danger">Закрыть документ</a>
                    </div>
                </div>
                <form action="{{action('AdminController@postImport',[$document->id])}}" method="post" class="form-horizontal col-xs-12" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-xs-4">
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="col-xs-3">
                            <button type="submit" class="btn btn-primary">Импортировать</button>
                        </div>
                    </div>
                </form>
                <table class="list table table-bordered table-striped table-hover">
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Инвентарный номер</th>
                        <th>Код ОКОФ</th>
                        <th>Балансовая стоимость</th>
                        <th>Остаточная стоимость</th>
                        <th>Дата ввода в эксплуатацию</th>
                        <th>Действия</th>
                    </tr>
                    <?php $i=1; ?>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{{$item->name}}}</td>
                            <td>{{{$item->number}}}</td>
                            <td>{{{$item->okof}}}</td>
                            <td>{{{$item->carrying_amount}}}</td>
                            <td>
                                @if(($document->os_type == 'movables')||($document->os_type == 'value_movables')||($document->os_type == 'buildings'))
                                    {{{isset($item->variable->residual_value) ? $item->variable->residual_value : 0}}}
                                @endif
                            </td>
                            <td></td>
                            <td class="actions icons"><a href="{{action('ItemsController@getView',array($item->id))}}"><i class="fa fa-eye"></i></a><a href="{{action('ItemsController@getEdit',array($item->id))}}"><i class="fa fa-pencil-square-o"></i></a><a href="{{action('ItemsController@getDelete',array($item->id))}}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php $i=$i+1;?>
                    @endforeach

                </table>
            </div><!-- /.box-body -->
            <div class="box-footer">

            </div><!-- box-footer -->
        </div><!-- /.box -->


    </section>
@stop
@section('user-scripts')

@stop