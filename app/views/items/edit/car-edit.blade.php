<div class="form-group">
    <div class="os-form-group col-md-6 col-xs-6">
        <label for="name" class="control-label">Марка:</label>
        <div class="input-container">
            <input required="required" value="{{$item->car->brand}}" type="text" name="brand" class="form-control">
        </div>
    </div>
    <div class="os-form-group col-md-6 col-xs-6">
        <label for="name" class="control-label">Модель:</label>
        <div class="input-container">
            <input required="required" value="{{$item->car->model}}" type="text" name="model" class="form-control">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="os-form-group col-xs-4">
        <label class="control-label">
            Год выпуска
        </label>
        <div class="input-container">
            <input  required="required" value="{{$item->car->manufacture_year}}" type="date" class="form-control" name="manufacture_year">
        </div>
    </div>
    <div class="os-form-group col-md-4 col-xs-4">
        <label for="name" class="control-label">VIN:</label>
        <div class="input-container">
            <input required="required" value="{{$item->car->vin}}" type="text" name="vin" class="form-control">
        </div>
    </div>
    <div class="os-form-group col-md-4 col-xs-4">
        <label for="name" class="control-label">КПП:</label>
        <div class="input-container">
            <input required="required" type="text" value="{{$item->car->kpp}}" name="kpp" class="form-control">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="os-form-group col-md-4 col-xs-4">
        <label for="name" class="control-label">Двигатель:</label>
        <div class="input-container">
            <input required="required" type="text" value="{{$item->car->engine}}" name="engine" class="form-control">
        </div>
    </div>
    <div class="os-form-group col-md-4 col-xs-4">
        <label for="name" class="control-label">Мощность:</label>
        <div class="input-container">
            <input required="required" type="text" value="{{$item->car->power}}" name="power" class="form-control">
        </div>
    </div>
    <div class="os-form-group col-md-4 col-xs-4">
        <label for="name" class="control-label">Цвет:</label>
        <div class="input-container">
            <input required="required" value="{{$item->car->color}}" type="text" name="color" class="form-control">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="os-form-group col-xs-6">
        <label for="name" class="control-label">Тип автомобиля:</label>
        <div class="input-container">
            {{ Form::select('car_type', Car::$car_type, null, array('class' => 'form-control')) }}
        </div>
    </div>
</div>