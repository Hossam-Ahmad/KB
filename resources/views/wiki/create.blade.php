@extends('layouts.master')

@section('content')
	<div class="aside-content create-wiki-aside">
		<div class="row no-container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="page-header">
					<i class="fa fa-book fa-fw fa-lg icon"></i> Create wiki
				</div>
				<form action="{{ route('wikis.store', [$team->slug, ]) }}" method="POST" role="form" class="create-wiki-form">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								<label class="control-label" for="name">Name</label>
								<input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" required>
								@if($errors->has('name'))
								    <p class="help-block has-error">{{ $errors->first('name') }}</p>
								@endif
							</div>
							<div class="form-group {{ $errors->has('space') ? 'has-error' : '' }}">
								<label for="space" class="control-label">Space</label>
								<select name="space" id="space" class="form-control" required>
									<option value="">Select a space</option>
									@foreach($spaces as $space)
										<option value="{{ $space->id }}">{{ $space->name }}</option>
									@endforeach
								</select>
								@if($errors->has('space'))
								    <p class="help-block has-error">{{ $errors->first('space') }}</p>
								@endif
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="form-group">
								<label class="control-label" for="outline">Outline</label>
								<input type="text" name="outline" id="outline" class="form-control">
							</div>
							<div class="form-group">
								<label class="control-label" for="tags">Tags</label>
								<select class="form-control" name="tags[]" id="tags" multiple="multiple"></select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label" for="wiki-description">Description</label>
						<textarea name="description" class="form-control" data-height="380" id="wiki-description"></textarea>
					</div>
					<button type="submit" class="btn btn-primary pull-right">Save</button>
					<a href="{{ route('dashboard', [$team->slug]) }}" class="btn btn-link pull-right">Cancel</a>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
@endsection