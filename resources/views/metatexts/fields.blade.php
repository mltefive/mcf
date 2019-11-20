<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('metatexts.index') !!}" class="btn btn-default">Отмена</a>
</div>

<!-- Code Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_name', 'Code Name:') !!}
    {!! Form::text('code_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('code_text', 'Code Text:') !!}
    {!! Form::textarea('code_text', null, ['class' => 'form-control']) !!}
</div>



<!-- Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('draft', 'Draft:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('draft', 0) !!}
        {!! Form::checkbox('draft', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('metatexts.index') !!}" class="btn btn-default">Отмена</a>
</div>


<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  CKEDITOR.replace('code_text', options);
</script>