
@extends('layouts.master')

@section('content')
	<div class="aside-content">
		<div class="row no-container">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="page-header"><i class="fa fa-history fa-fw fa-lg icon"></i> Activities</div>
                @if(sizeof($results) > 0)
                    <div class="events-list">
                        @foreach($results as $result)
                            <div class="media event">
                                <img class="media-object" style="border-radius: 3px;" src="/img/no-image.png" width="44" height="44" alt="Image">
                                <a href="/KBsearch{{$result['link']}}">
                                    <p style="padding: 2px 11px; margin-bottom: 5px; margin-top: 10px; border-left: 2px solid #eee;">{{ $result['title'] }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else 
                    <h1 class="nothing-found side"><i class="fa fa-exclamation-triangle fa-fw icon"></i> Nothing found</h1>
                @endif
			</div>
		</div>
	</div>
@endsection