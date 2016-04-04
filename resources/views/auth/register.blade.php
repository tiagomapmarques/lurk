@extends('vendor.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">{{ trans('auth.register') }}</div>
					<div class="panel-body">
						{!! Form::open(['url' => '/register', 'class' => 'form-horizontal']) !!}

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								{{ Form::label('name', trans('auth.name'), ['for' => 'name', 'class' => 'col-md-4 control-label']) }}
								<div class="col-md-6">
									{{ Form::text('name', old('name'), ['class' => 'form-control']) }}
									@if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								{{ Form::label('email', trans('auth.email'), ['for' => 'email', 'class' => 'col-md-4 control-label']) }}
								<div class="col-md-6">
									{{ Form::email('email', old('email'), ['class' => 'form-control']) }}
									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								{{ Form::label('password', trans('auth.password'), ['for' => 'password', 'class' => 'col-md-4 control-label']) }}
								<div class="col-md-6">
									{{ Form::password('password', ['class' => 'form-control']) }}
									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
								{{ Form::label('password_confirmation', trans('auth.password-confirm'), ['for' => 'password_confirmation', 'class' => 'col-md-4 control-label']) }}
								<div class="col-md-6">
									{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
									@if ($errors->has('password_confirmation'))
										<span class="help-block">
											<strong>{{ $errors->first('password_confirmation') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									{{ Form::submit(trans('auth.register'), ['class' => 'submit btn btn-primary']) }}
								</div>
							</div>

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection