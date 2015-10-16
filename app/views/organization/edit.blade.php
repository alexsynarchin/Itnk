@extends('layouts.dashboard.dashboard')
@section('content')
    <section class="content-header">
        <h1>
            Ввод данных об организации
            <small>Система ИТНК-ОБЗОР</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home"><i class="fa fa-dashboard"></i> Панель управления</a></li>
            <li class="active">Ввод данных об организации</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Новая организация </h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            {{ Form::model($organization, array('url' => action('AdminController@postOrgUpdate', $organization->id), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
            <div class="box-body">
                <div class="form-group">
                    <div class="os-form-group col-md-12  col-xs-12">
                        <label  class="control-label">Полное наименование</label>
                        <div class="input-container">
                            <input type="text" required="required"  name="full_name" class="form-control" value="{{$organization->full_name}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-12  col-xs-12">
                        <label  class="control-label">Сокращенное наименование</label>
                        <div class="input-container">
                            <input type="text" required="required"  name="short_name" class="form-control" value="{{$organization->short_name}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">Номер договора</label>
                        <div class="input-container">
                            <input type="text" required="required"  name="contract_number" class="form-control" value="{{$organization->contract_number}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">Дата договора</label>
                        <div class="input-container">
                            <input type="date" required="required"  name="date" class="form-control" value="{{$organization->date}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">ИНН</label>
                        <div class="input-container">
                            <input type="text" required="required"   name="inn" class="form-control" value="{{$organization->inn}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">КПП</label>
                        <div class="input-container">
                            <input type="text"   name="kpp" class="form-control" value="{{$organization->kpp}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">Фактический адрес</label>
                        <div class="input-container">
                            <input type="text"  required="required"  name="fact_address" class="form-control" value="{{$organization->fact_address}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">Юридический адрес</label>
                        <div class="input-container">
                            <input type="text" required="required"   name="legal_address" class="form-control" value="{{$organization->legal_address}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">РС</label>
                        <div class="input-container">
                            <input type="number"   name="rs" class="form-control" value="{{$organization->rs}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">ЛС</label>
                        <div class="input-container">
                            <input type="number"   name="ls" class="form-control" value="{{$organization->ls}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">КС</label>
                        <div class="input-container">
                            <input type="number"   name="ks" class="form-control" value="{{$organization->ks}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-3  col-xs-3">
                        <label  class="control-label">БИК</label>
                        <div class="input-container">
                            <input type="number"   name="bik" class="form-control" value="{{$organization->bik}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">На основании чего действует для договора</label>
                        <div class="input-container">
                            <input type="text"  required="required"  name="operate_foundation" class="form-control" value="{{$organization->operate_foundation}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">В банке</label>
                        <div class="input-container">
                            <input type="text" required="required"   name="bank" class="form-control" value="{{$organization->bank}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-7  col-xs-7">
                        <label  class="control-label">ФИО руководителя</label>
                        <div class="input-container">
                            <input type="text"  required="required"  name="fio" class="form-control" value="{{$organization->fio}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-5  col-xs-5">
                        <label  class="control-label">Должность руководителя</label>
                        <div class="input-container">
                            <input type="text" required="required"   name="boss_position" class="form-control" value="{{$organization->boss_position}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">Телефон</label>
                        <div class="input-container">
                            <input type="text"  required="required"  name="phone" class="form-control" value="{{$organization->phone}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">e-mail</label>
                        <div class="input-container">
                            <input type="email" required="required"   name="email" class="form-control" value="{{$organization->email}}">
                        </div>
                    </div>
                </div>
                <h4>Ответственный сотрудник:</h4>
                <div class="form-group">
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">Имя пользователя:</label>
                        <div class="input-container">
                            <input type="text"  required="required"  name="username" class="form-control" value="{{$organization -> user -> username}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-6  col-xs-6">
                        <label  class="control-label">Пароль</label>
                        <div class="input-container">
                            <input type="text" required="required"   name="password" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="os-form-group col-md-4  col-xs-4">
                        <label  class="control-label">Имя:</label>
                        <div class="input-container">
                            <input type="text"  required="required"  name="first_name" class="form-control" value="{{$organization -> user -> first_name}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-4  col-xs-4">
                        <label  class="control-label">Фамилия:</label>
                        <div class="input-container">
                            <input type="text"  required="required"  name="last_name" class="form-control" value="{{$organization -> user -> last_name}}">
                        </div>
                    </div>
                    <div class="os-form-group col-md-4  col-xs-4">
                        <label  class="control-label">Отчество:</label>
                        <div class="input-container">
                            <input type="text"    name="surname" class="form-control" value="{{$organization -> user -> surname}}">
                        </div>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Сохранить организацию</button>
            </div><!-- /.box-footer -->
            {{ Form::close() }}
        </div>

    </section>
@stop