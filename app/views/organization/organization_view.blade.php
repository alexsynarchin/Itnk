@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Организация - {{$organization -> short_name}}
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="control-bnts row">
            <div class=" right col-xs-6 col-xs-offset-6">
                <a href="{{action('OssController@getOrgDocs', [$organization-> id])}}" class="big add-btn btn btn-primary">Документы организации</a>
                <a href="\organizations" class="big add-btn btn btn-danger">Закрыть</a>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h3 class="panel-title">{{$organization -> full_name}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="os-form-group col-md-3 col-xs-3">
                            <label>ИНН:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> inn}}
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="os-form-group col-md-9 col-xs-9">
                            <label>Фактический адрес:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> fact_address}}
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="os-form-group col-md-3 col-xs-3">
                            <label>КПП:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> kpp}}
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="os-form-group col-md-9 col-xs-9">
                            <label>Юридический адрес:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> legal_address}}
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="os-form-group col-md-6 col-xs-6">
                            <label>ФИО руководителя:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> fio}}
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="os-form-group col-md-6 col-xs-6">
                            <label>Должность руководителя:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> boss_position}}
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="os-form-group col-md-5 col-xs-12">
                            <label>На основании чего действует (для договора):</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> operate_foundation}}
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="os-form-group col-md-7 col-xs-12">
                            <label>В Банке:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> bank}}
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="os-form-group col-md-4 col-xs-4">
                            <label>РС:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> rs}}
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="os-form-group col-md-4 col-xs-4">
                            <label>КС:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> ks}}
                                </p>
                            </div>
                            <hr>
                        </div>
                        <div class="os-form-group col-md-4 col-xs-4">
                            <label>БИК:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> bik}}
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="os-form-group col-xs-12">
                            <label>Ф.И.О. Ответственного сотрудника:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization->user-> first_name }} {{$organization->user-> last_name }} {{$organization->user-> surname }}
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="os-form-group col-xs-3">
                            <label>Телефон:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> phone }}
                                </p>
                                <hr>
                            </div>
                        </div>
                        <div class="os-form-group col-xs-3">
                            <label>Email:</label>
                            <div class="input-container">
                                <p class="static">
                                    {{$organization -> email }}
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- /.content -->
@stop