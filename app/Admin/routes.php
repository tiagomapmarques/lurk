<?php

// Default admin route
Route::get('', ['as' => 'admin.dashboard', function() {
	return AdminSection::view(
		view('admin::sections.dashboard'),
		Language::trans('database.dashboard')
	);
}]);
