<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Отмена</a>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Ident Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ident', 'Ident:') !!}
    {!! Form::text('ident', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Xml Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xml_name', 'Xml Name:') !!}
    {!! Form::text('xml_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Xml Cat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xml_cat', 'Xml Cat:') !!}
    {!! Form::text('xml_cat', null, ['class' => 'form-control']) !!}
</div>

<!-- Cat Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cat_id', 'Cat Id:') !!}
    {!! Form::number('cat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Remote Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remote_images', 'Remote Images:') !!}
    {!! Form::text('remote_images', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_amount', 'Price Amount:') !!}
    {!! Form::text('price_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Отмена</a>
</div>
