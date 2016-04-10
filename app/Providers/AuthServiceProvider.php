<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use AdminTemplate;

class AuthServiceProvider extends ServiceProvider {
	/**
	 * The policy mappings for the application.
	 *
	 * @var array
	 */
	protected $policies = [
		'App\Model' => 'App\Policies\ModelPolicy',
	];

	/**
	 * Register any application authentication / authorization services.
	 *
	 * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
	 * @return void
	 */
	public function boot(GateContract $gate) {
		$this->registerPolicies($gate);

		view()->composer(AdminTemplate::getTemplateViewPath('_partials.header'), function($view) {
			$view->getFactory()->inject(
				'navbar.right', view('auth.__nav', ['_nav_style' => 'margin-right: 15px;'])
			);
		});
	}
}
