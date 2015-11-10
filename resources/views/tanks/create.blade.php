@extends('layout')

@section('content')
<div>
	{!! Form::open(array('url'=>'tanks')) !!}

  		{!! Form::label('status', 'Status') !!}
  		{!! Form::select('status_id', $statuses) !!}

  		{!! Form::label('year', 'Year') !!}
  		{!! Form::number('year') !!}

  		{!! Form::label('make', 'Make') !!}
  		{!! Form::text('make') !!}

  		{!! Form::label('model', 'Model') !!}
  		{!! Form::text('model') !!}

  		{!! Form::label('dotCode', 'D.O.T. Code') !!}
  		{!! Form::text('dotCode') !!}

  		{!! Form::label('capacity', 'Capacity') !!}
  		{!! Form::text('capacity') !!}

  		{!! Form::label('compartments', '# of Compartments') !!}
  		{!! Form::number('compartments') !!}

  		{!! Form::label('bulkheads', 'Bulkheads') !!}
  		{!! Form::text('bulkheads') !!}

  		{!! Form::label('compartmentSizes', 'Compartment Sizes') !!}
  		{!! Form::text('compartmentSizes') !!}

  		{!! Form::label('pumps', 'Pumps') !!}
  		{!! Form::text('pumps') !!}

  		{!! Form::label('pto', 'PTO Controls') !!}
  		{!! Form::text('pto') !!}

  		{!! Form::label('meters', 'Meters') !!}
  		{!! Form::text('meters') !!}

  		{!! Form::label('spitTanks', 'Spit Tanks') !!}
  		{!! Form::text('spitTanks') !!}

  		{!! Form::label('hoseReels', 'Hose Reels') !!}
  		{!! Form::text('hoseReels') !!}

  		{!! Form::label('deliveryHoses', 'Delivery Hoses') !!}
  		{!! Form::text('deliveryHoses') !!}

  		{!! Form::label('nozzles', 'Nozzles') !!}
  		{!! Form::text('nozzles') !!}

  		{!! Form::label('dryBreakManifold', 'Dry Breaks/Manifold') !!}
  		{!! Form::text('dryBreakManifold') !!}

  		{!! Form::label('bottomLoad', 'Bottom Load') !!}
  		{!! Form::text('bottomLoad') !!}

  		{!! Form::label('vk', 'V-K') !!}
  		{!! Form::text('vk') !!}

  		{!! Form::label('ip', 'I-P') !!}
  		{!! Form::text('ip') !!}

  		{!! Form::label('comments', 'Comments') !!}
  		{!! Form::textArea('comments') !!}

  		{!! Form::submit('Create Tank') !!}

  	{!! Form::close() !!}
</div>
@stop
