<?php
namespace Redefinelabltd\Redadmin;

use Illuminate\Support\ServiceProvider;

class RedAdminServiceProvider extends ServiceProvider
{
	public function boot()
	{
	    $this->publishes([
		    __DIR__.'/dist' => public_path('vendor/redadmin'),
		], 'public');
	}
}