<div class="form-group">
    <div class="os-form-group col-md-6 col-xs-6">
        <label for="name" class="control-label">Назначение:</label>
        <div class="input-container">
            <input required="required" type="text" value="{{$item->building->appointment}}"  name="appointment" class="form-control">
        </div>
    </div>
    <div class="os-form-group col-md-6 col-xs-6">
        <label for="name" class="control-label">Материал стен:</label>
        <div class="input-container">
            <input required="required" type="text" value="{{$item->building->wall_material}}" name="wall_material" class="form-control">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="os-form-group col-xs-6">
        <label class="control-label">
            Год постройки
        </label>
        <div class="input-container">
            <input  required="required" type="date" value="{{$item->building->date_construction}}"  class="form-control" name="date_construction">
        </div>
    </div>
    <div class="os-form-group col-md-3 col-xs-3">
        <label for="name" class="control-label">Этажность:</label>
        <div class="input-container">
            <input required="required" type="number" value="{{$item->building->floors}}" name="floors" class="form-control">
        </div>
    </div>
</div>