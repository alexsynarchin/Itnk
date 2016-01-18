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
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="control-bnts">
                    <form method="post" class="inline" action="{{action('OrganizationsController@postCalcSums', [$organization->id])}}"><button type="submit" class="add-btn btn btn-success">Обновить итоговые суммы по организации</button></form>
                </div>
            <table class="list table table-bordered table-hover">
                <thead>
                <tr>
                    <th></th>
                    <th>Итоговые суммы</th>
                    <th>
                        Движимое имущество
                    </th>
                    <th>
                        Особо ценное движимое имущество
                    </th>
                    <th>Автомобили</th>
                    <th>
                        Здания и сооружения
                    </th>
                    <th>Земельные участки</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Балансовая стоимость</td>
                    <td>{{number_format($organization->org_carrying_amount, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_movables_carrying_amount, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_value_movables_carrying_amount, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_cars_carrying_amount, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_buildings_carrying_amount, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_parcels_carrying_amount, 2,'.', ' ')}}</td>
                </tr>
                <tr>
                    <td>Остаточная стоимость</td>
                    <td>{{number_format($organization->org_residual_value, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_movables_residual_value, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_value_movables_residual_value, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_cars_residual_value, 2,'.', ' ')}}</td>
                    <td>{{number_format($organization->org_buildings_residual_value, 2,'.', ' ')}}</td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
                <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-file-text-o"></i> Документы</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="list table table-bordered table-hover">
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
                        <td>
                            @if($item->name)
                                {{{$item->name}}}
                            @endif
                        </td>
                        <td>
                            @if($item->number)
                                {{{$item->number}}}
                            @endif
                        </td>
                        <td>
                            @if($item->okof)
                                {{{$item->okof}}}
                            @endif
                        </td>
                        <td>
                            @if($item->carrying_amount)
                                {{{number_format($item->carrying_amount, 2, '.', ' ')}}}
                            @endif
                        </td>
                        <td>
                                {{{isset($item->variable->residual_value) ? number_format($item->variable->residual_value, 2, '.', ' ') : 0}}}

                        </td>
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
</section>
@stop
