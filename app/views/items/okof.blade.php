<div class="os-form-group col-md-4 col-xs-4">
    <label for="name" class="control-label">Вид ОС:</label>
    <div class="input-container">
        <input required="required" type="text" name="os_view" class="form-control">
    </div>
</div>
<div class="os-form-group col-md-4 col-xs-4">
    <label for="name" class="control-label">Код ОКОФ:</label>
    <div class="input-container">
        <input required="required" type="number" name="okof"  class="form-control">
    </div>
</div>
<a href="{{action('OkofsController@index')}}" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Значения из справочника ОКОФ</a>