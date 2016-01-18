<div class="form-group">
    <div class="col-xs-12">
        <label>Адрес:</label>
    </div>
    <div class="os-form-group col-xs-4">
        <input required="required" type="text" value="{{$item->address->state}}" name="state" class="form-control" placeholder="Регион">
    </div>
    <div class="os-form-group col-xs-4">
        <input type="text" name="district" value="{{$item->address->district}}" class="form-control" placeholder="Район">
    </div>
    <div class="os-form-group col-xs-4">
        <input required="required" type="text" name="city" value="{{$item->address->city}}" class="form-control" placeholder="Населенный пункт">
    </div>
</div>
<div class="form-group">
    <div class="os-form-group col-xs-4">
        <input required="required" type="text" name="street" value="{{$item->address->street}}" class="form-control" placeholder="Улица">
    </div>
    <div class="os-form-group col-xs-2">
        <input type="text" name="building_number" value="{{$item->address->building_number}}" class="form-control" placeholder="Дом">
    </div>
    <div class="os-form-group col-xs-2">
        <input type="text" name="building_number_2" value="{{$item->address->building_number_2}}" class="form-control" placeholder="Корпус">
    </div>
</div>