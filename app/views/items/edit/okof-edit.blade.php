<!--<div class="os-form-group col-md-4 col-xs-4">
    <label for="name" class="control-label">Вид ОС:</label>
    <div class="input-container">
        <input required="required" type="text" value="{{$item->os_view}}" name="os_view" class="form-control">
    </div>
</div>-->
<div class="os-form-group col-md-4 col-xs-4">
    <label for="name" class="control-label">Код ОКОФ:</label>
    <div class="input-container">
        <input required="required" type="number" name="okof" value="{{$item->okof}}" class="form-control">
    </div>
</div>
<a href="" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Значения из справочника ОКОФ</a>