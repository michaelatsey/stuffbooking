<?php

// All route names are prefixed with 'admin.material'.

use App\Domains\Material\Http\Controllers\Backend\VersionController;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'material',
    'as' => 'material.',
    //'middleware' => config('boilerplate.access.middleware.confirm'),
], function () {
    Route::get('version', [VersionController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });
});
