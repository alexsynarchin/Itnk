@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Инспектор
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box ">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-file-text-o"></i> Список организаций</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body ">
                        <table class="list table table-bordered table-striped table-hover">
                            <tr>
                                <th>Название</th>
                                <th>ИНН</th>
                                <th>Действия</th>
                            </tr>
                            @foreach ($organizations as $organization)
                                @if(($organization->id==1)||(($organization->id==27)))
                                @else
                                <tr>
                                    <td>{{{$organization->short_name}}}</td>
                                    <td>{{{$organization->inn}}}</td>
                                    <td class="actions icons"><a href="{{action('OrganizationsController@getView',array($organization->id))}}"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
@stop