@extends('layouts.master')

@section('content')
	<div class="aside-content">
        <div class="row no-container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div style="border: 1px solid #eee; border-radius: 3px; margin-bottom: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.05);">
                    <div class="markdown-body" style="padding: 0px 25px;">
                       {!! $wiki->description !!}
                    </div>
                </div>     
            </div>
        </div>
	</div>
@endsection