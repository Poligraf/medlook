<div class="container">
<div class="row clearfix">
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['class' => 'medClass' ])!!}
            <div class="form-group">
                {!! Form::label('Medication', 'Generic Name:') !!}
 			{!! Form::text ('medication', null,array('autofocus' => 'autofocus','class' => 'form-control')) !!}
            </div>
 			<div class = "form group">
				{!! Form::label('strength', 'Strength:') !!}
 				{!! Form::text ('strength', null,array('class' => 'form-control')) !!}
 			</div>
 		 	<div class = "form group">
				{!! Form::label('Brand Name', 'Brand Name:') !!}
 				{!! Form::text ('indication', null,array('class' => 'form-control')) !!}
 			</div>
            <div class = "form group">  
            {!! Form::label('indicate', 'What Drug Is Used For:') !!}  
            {!! Form::textarea('indication', null, ['class' => 'form-control']) !!}
            </div>
            <div class = "form group">
                {!! Form::label('Side Effects', 'Side Effects:') !!}
                {!! Form::textarea ('sideEffects', null,array('class' => 'form-control')) !!}
            </div>
 		 	<div class = "form group">
				{!! Form::label('Picture Of Drug', 'Picture Of Drug: ') !!}
 				{{ Form::file('medPic', ['class' => 'field']) }}
 			</div>
 		
     		
            {!! Form::submit('Insert Drug', ['class' => 'btn btn-primary']) !!}
        	
        {!! Form::close() !!}
    </div>
</div>
</div>
<div class="row clearfix">
    <div class="col-md-12 column">
    </div>
</div>
</div>

		


