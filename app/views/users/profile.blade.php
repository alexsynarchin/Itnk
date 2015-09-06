@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Профиль пользователя
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Профиль</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-xs-6">
            <div class="panel panel-default ">
                <div class="panel-heading"><h5>Данные пользователя</h5></div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Имя:</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ Auth::user()->first_name }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Фамилия:</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ Auth::user()->last_name }}</p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>



    </section><!-- /.content -->
@stop