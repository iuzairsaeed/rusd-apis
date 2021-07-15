<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'Web'], function () {
    Auth::routes(['register'=>false, 'reset'=>false]);

    Route::group(['middleware' => 'auth' ], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('dashboard/list', 'DashboardController@getList')->name('dashboard.getList');

        Route::get('changePassword','ProfileController@showChangePasswordForm');
        Route::post('changePassword','ProfileController@changePassword')->name('changePassword');

        Route::get('profile','ProfileController@showProfileForm');
        Route::post('profile','ProfileController@profile')->name('profile');

        Route::resource('vendor','VendorController');
        Route::get('vendorList', 'VendorController@getList')->name('vendor.getList');
        Route::get('vendorDropDownList', 'VendorController@getVendor')->name('vendor.getVendor');

        Route::resource('product','ProductController');
        Route::get('productList', 'ProductController@getList')->name('product.getList');
        Route::get('product-dropdown-list', 'ProductController@getProduct')->name('product.get-product');
        Route::get('all-product-dropdown-list', 'ProductController@getAllProducts')->name('product.all-get-product');        
        
        Route::resource('purchase-order','PurchaseOrderController');
        Route::get('purchaseOrderList', 'PurchaseOrderController@getList')->name('purchase-order.get-list');
        Route::get('purchaseOrderPDF/{id}', 'PurchaseOrderController@purchaseOrderPDF')->name('purchase-order.pdf');


        Route::resource('checkout','CheckoutController');
        Route::get('checkoutList', 'CheckoutController@getList')->name('checkout.get-list');
        Route::get('/getQuantity/{quantity}/product/{product}','CheckoutController@getQuanitity');
        Route::get('/getPrice/{product}','CheckoutController@getPrice');
        Route::get('/checkAmountProduct/{product}/amount/{amount}/quantity/{quantity}','CheckoutController@checkAmountProduct');
        Route::get('checkoutPDF/{id}', 'ReportController@checkoutPDF')->name('checkout.pdf');

        Route::resource('permission','PermissionController');
        Route::get('permission-dropdown-list', 'PermissionController@getPermission')->name('permission.get-permission');
        Route::get('permission-list', 'PermissionController@getList')->name('permission.get-list');

        Route::resource('role','RoleController');
        Route::get('role-list', 'RoleController@getList')->name('role.get-list');
        Route::get('role-dropdown-list', 'RoleController@getRole')->name('role.get-role');

        Route::get('report/stock','ReportController@stock')->name('report.stock');
        Route::post('report/stock','ReportController@Stockstore')->name('report.stock');

        Route::get('report/delivery','ReportController@delivery')->name('report.delivery');
        Route::post('report/delivery','ReportController@Deliverystore')->name('report.delivery');
        Route::any('/getDelivery','ReportController@getDelivery');
        
        Route::resource('report','ReportController');
        
        Route::post('generate/pdf','ReportController@downloadPDF')->name('report.pdf-generate');
        Route::post('generate/stock/pdf','ReportController@downloadStockPDF')->name('stock.pdf-generate');
    
        Route::get('customer-dropdown-list', 'UserController@customerList')->name('customer.get-customer');
        Route::get('/getCustomer/{value}','UserController@getCustomer');
    });

    Route::resource('department','DepartmentController');
    Route::get('departmentList', 'DepartmentController@getList')->name('department.get-list');
    Route::get('department-dropdown-list', 'DepartmentController@getDept')->name('department.get-dept');
    
    
    
    Route::group(['middleware' => ['auth']], function () {
        Route::post('registerUser','Auth\RegisterController@register')->name('registerUser');
        Route::resource('users','UserController');
        Route::get('usersList', 'UserController@getList')->name('users.getList');
        Route::get('users-dropdown-list', 'UserController@getUser')->name('users.get-user');
    });
   
});

Route::get('terms_conditions', 'Web\PageController@terms_conditions')->where('any', '.*');
Route::get('{any}', 'Web\PageController@home')->where('any', '.*');
