<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orders.index') !!}" class="btn btn-default">Отмена</a>
</div>

<!-- Pay Type Field -->
<div class="form-group col-sm-6">

    {!! Form::label('pay_type', __('Pay Type')) !!}
    {{-- {!! Form::text('pay_type', null, ['class' => 'form-control', 'disabled'=>'']) !!} --}}
    {!!  Form::select('pay_type', $pay_types, null, ['class' => 'form-control']) !!}
    {{-- {!! $pay_types[$order->pay_type] !!} --}}

</div>

<!-- Pay Place Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_place', __('Pay Place')) !!}
    {{-- {!! Form::text('pay_place', null, ['class' => 'form-control', 'disabled'=>'']) !!} --}}
    {!!  Form::select('pay_place', $pay_places, null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('Status')) !!}
    {{-- {!! Form::text('status', null, ['class' => 'form-control']) !!} --}}
    {!!  Form::select('status', $status, null, ['class' => 'form-control']) !!}
</div>
<!-- Pay Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_discount', __('Pay Discount')) !!}
    {!! Form::text('pay_discount', null, ['class' => 'form-control']) !!}
</div>


<!-- Pay Adr Field -->
<div class="form-group col-sm-6 ">
    {!! Form::label('pay_adr', __('Pay Adr')) !!}
    {!! Form::textarea('pay_adr', null, ['class' => 'form-control', 'rows'=>'4']) !!}
</div>

<!-- Pay Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_contact', __('Pay Contact')) !!}
    {!! Form::textarea('pay_contact', null, ['class' => 'form-control', 'rows'=>'4']) !!}
</div>



<!-- Comment Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comment', __('Comment')) !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows'=>'4']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Сохранить', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('orders.index') !!}" class="btn btn-default">Отмена</a>
</div>
