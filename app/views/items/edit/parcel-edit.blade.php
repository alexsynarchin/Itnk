<div class="os-form-group col-md-5 col-xs-5">
    <label class="control-label">Кадастровый номер:</label>
    <div class="input-container">
        <input required="required" type="number" class="form-control" name="cadastral" value="{{$item->parcel->cadastral}}">
    </div>
</div>
</div>
<div class="form-group">
    <div class="os-form-group col-md-6 col-xs-6">
        <label class="control-label">Назначение земель:</label>
        <div class="input-container">
            <input required="required" type="text" class="form-control" name="assigning land" value="{{$item->parcel->assigning land}}>
        </div>
    </div>
    <div class="os-form-group col-md-2 col-xs-2">
        <label class="control-label">Площадь:</label>
        <div class="input-container">
            <input required="required" type="number" class="form-control" name="area" value="{{$item->parcel->area}}>
        </div>
    </div>
