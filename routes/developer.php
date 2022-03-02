<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('images/{h}/{w}/{image}', function ($h, $w, $image) {
    return Image::make(storage_path('app/public/images/') . $image)->resize($h, $w)->response();
});

Route::get('s3/{h}/{w}/{filePath}', function ($h, $w, $filePath) {
    return Image::make(Storage::disk('s3')->url($filePath))->resize($h, $w)->response();
});

Route::get('images/{image}', function ($image) {
    if (file_exists(public_path('images/' . $image))) {
        return Image::make(public_path('images/') . $image)->response();
    }

    return Image::make(storage_path('app/public/images/') . $image)->response();
});


if (config('app.env') !== 'production') {

    Route::get('clear-all', function () {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('optimize:clear');
        Artisan::call('debugbar:clear');
        return "cleared";
    })->name('clear-all');


    Route::get('clear-cache', function () {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    })->name('clear-cache');

    Route::get('view-clear', function () {
        Artisan::call('view:clear');
        return "View is cleared";
    })->name('view-clear');

    Route::get('clear-config', function () {
        Artisan::call('config:clear');
        return "Config is cleared";
    })->name('clear-config');

    Route::get('route-clear', function () {
        Artisan::call('route:clear');
        return "route is cleared";
    })->name('route-clear');

    Route::get('migrate', function () {
        Artisan::call('migrate');
        return "migrate success";
    })->name('migrate');

    Route::get('migrate-rollback', function () {
        Artisan::call('migrate:rollback');
        return "migrate success";
    })->name('migrate-rollback');

    Route::get('migrate-refresh', function () {
        Artisan::call('migrate:refresh');
        return "migrate success";
    })->name('migrate-refresh');

    Route::get('storage-link', function () {
        Artisan::call('storage:link');
        return "storage-link success";
    })->name('storage-link');

    Route::get('routes', function () {
        $routeCollection = Route::getRoutes();

        echo "<table style='width:100%'>";
        echo "<tr>";
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='60%'><h4>Route</h4></td>";
        echo "<td width='60%'><h4>Name</h4></td>";
        echo "<td width='100%'><h4>Corresponding Action</h4></td>";
        echo "</tr>";
        foreach ($routeCollection as $value) {
            echo "<tr>";
            echo "<td>" . $value->methods()[0] . "</td>";
            echo "<td>" . $value->uri() . "</td>";
            echo "<td>" . $value->getName() . "</td>";
            echo "<td>" . str_replace("App\Http\Controllers", ' ', $value->getActionName()) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    });

    Route::get('seed', function () {
        if (request()->seeder) {
            return Artisan::call("db:seed --class={request()->seeder}");
        }

        Artisan::call('db:seed');

        return "seed success";
    });

    Route::get('scribe', function () {
    });



    Route::get('make', function () {
        $data = [
            'Address',
            'Banner',
            'Breed',
            'Category',
            'EventParticipant',
            'Event',
            'Friendship',
            'GroupMember',
            'Group',
            'Notification',
            'OrderDetail',
            'Order',
            'OrderTracker',
            'Organization',
            'Page',
            'PetDetail',
            'Pet',
            'PostComment',
            'PostLike',
            'Post',
            'Product',
            'Rating',
            'Service',
            'Setting',
            'Shop',
            'Subscription',
            'UserCart',
            'UserGallery',
            'UserOrder',
            'User',
            'UserService',
            'UserSubscription',
            'UserTransaction',
            'UserWallet',
        ];

        foreach ($data as $key => $value) {
            echo "'App\Models\{{$value}}'=>'App\Policies\{{$value}}Policy',</br>";
        }
    });
}
