<ul class="nav nav-tabs" role="tablist">

	<li role="presentation" class="{{ (Route::currentRouteName() == 'settings.profile' ? 'active' : '') }}">

		<a href="{{ route('settings.profile', [$team->slug, Auth::user()->slug]) }}">Profile</a>

	</li>

</ul>