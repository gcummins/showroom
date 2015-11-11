<style>
.mdl-textfield {
    width: 100%;
}
</style>

<div>
{!! Form::label('status_id', 'Status') !!}
{!! Form::select('status_id', $statuses) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('year', 'Year', array(
        'class'   => "mdl-textfield__label"
    )) !!}
    {!! Form::text('year', null, array(
        'class'   => "mdl-textfield__input",
        'pattern' => "^(19|20)\d\d"
    )) !!}
    <span class="mdl-textfield__error">Enter a valid year</span>
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('make', 'Make', array('class' => 'mdl-textfield__label')) !!}
    {!! Form::text('make', null, array('class' => 'mdl-textfield__input')) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('model', 'Model', array(
        'class'   => "mdl-textfield__label"
    )) !!}
    {!! Form::text('model', null, array(
        'class'   => "mdl-textfield__input"
    )) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('dotCode', 'D.O.T. Code', array(
        'class'   => "mdl-textfield__label"
    )) !!}
    {!! Form::text('dotCode', null, array(
        'class'   => "mdl-textfield__input"
    )) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('capacity', 'Capacity', array(
        'class'   => "mdl-textfield__label"
    )) !!}
    {!! Form::text('capacity', null, array(
        'class'   => "mdl-textfield__input"
    )) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::label('compartments', '# of Compartments', array(
        'class'   => "mdl-textfield__label"
    )) !!}
    {!! Form::text('compartments', null, array(
        'class'   => "mdl-textfield__input",
        'pattern' => "-?[0-9]*(\.[0-9]+)?"
    )) !!}
    <span class="mdl-textfield__error">Enter a number</span>
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('bulkheads', 'Bulkheads', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('bulkheads', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('compartmentSizes', 'Compartment Sizes', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('compartmentSizes', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('pumps', 'Pumps', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('pumps', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('pto', 'PTO Controls', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('pto', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('meters', 'Meters', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('meters', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('spitTanks', 'Spit Tanks', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('spitTanks', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('hoseReels', 'Hose Reels', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('hoseReels', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('deliveryHoses', 'Delivery Hoses', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('deliveryHoses', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('nozzles', 'Nozzles', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('nozzles', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('dryBreakManifold', 'Dry Breaks/Manifold', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('dryBreakManifold', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('bottomLoad', 'Bottom Load', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('bottomLoad', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('vk', 'V-K', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('vk', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('ip', 'I-P', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::text('ip', null, array(
    'class'   => "mdl-textfield__input"
)) !!}
</div>

<br>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
{!! Form::label('comments', 'Comments', array(
    'class'   => "mdl-textfield__label"
)) !!}
{!! Form::textArea('comments', null, array(
    'class'   => "mdl-textfield__input",
    'size'    => '200x8'
)) !!}
</div>
