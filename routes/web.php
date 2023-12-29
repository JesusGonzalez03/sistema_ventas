<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\BillController;
use  App\Http\Controllers\InvoiceDetailController;


//CATEGORIES
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/categories/create', [CategoryController::class, 'store'])
    ->name('categories.create');

Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])
    ->name('categories.edit');

Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])
    ->name('categories.delete');


//PRODUCTS
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products/create', [ProductController::class, 'store'])
    ->name('products.create');

Route::get('/products/edit/{product}', [ProductController::class, 'edit'])
    ->name('products.edit');

Route::post('/products/edit/{product}', [ProductController::class, 'update'])
    ->name('products.edit');

Route::post('/products/delete/{product}', [ProductController::class, 'destroy'])
    ->name('products.delete');



//DEPARTMENTS
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');

Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');

Route::post('/departments/create', [DepartmentController::class, 'store'])->name('departments.create');

Route::get('/departments/edit/{department}', [DepartmentController::class, 'edit'])->name('departments.edit');

Route::post('/departments/edit/{department}', [DepartmentController::class, 'update'])->name('departments.edit');

Route::post('/departments/delete/{department}', [DepartmentController::class, 'destroy'])->name('departments.delete');



//CITIES
Route::get('/cities', [CityController::class, 'index'])->name('cities.index');

Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');

Route::post('/cities/create', [CityController::class, 'store'])->name('cities.create');

Route::get('/cities/edit/{city}', [CityController::class, 'edit'])->name('cities.edit');

Route::post('/cities/edit/{city}', [CityController::class, 'update'])->name('cities.edit');

Route::post('/cities/delete/{city}', [CityController::class, 'destroy'])->name('cities.delete');



//EMPLOYEES
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

Route::post('/employees/create', [EmployeeController::class, 'store'])->name('employees.create');

Route::get('/employees/edit/{employee}', [EmployeeController::class, 'edit'])->name('employees.edit');

Route::post('/employees/edit/{employee}', [EmployeeController::class, 'update'])->name('employees.edit');

Route::post('/employees/delete/{employee}', [EmployeeController::class, 'destroy'])->name('employees.delete');

//CUSTOMERS
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers/create', [CustomerController::class, 'store'])->name('customers.create');
Route::get('/customers/edit/{customer}', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('/customers/edit/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::post('/customers/delete/{customer}', [CustomerController::class, 'destroy'])->name('customers.delete');


//PROVIDERS
Route::get('/providers', [ProviderController::class, 'index'])->name('providers.index');
Route::get('/providers/create', [ProviderController::class, 'create'])->name('providers.create');
Route::post('/providers/create', [ProviderController::class, 'store'])->name('providers.create');
Route::get('/providers/edit/{provider}', [ProviderController::class, 'edit'])->name('providers.edit');
Route::post('/providers/edit/{provider}', [ProviderController::class, 'update'])->name('providers.edit');
Route::post('/providers/delete/{provider}', [ProviderController::class, 'destroy'])->name('providers.delete');


//BILLS
Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
Route::get('/bills/create', [BillController::class, 'create'])->name('bills.create');
Route::post('/bills/create', [BillController::class, 'store'])->name('bills.create');
Route::get('/bills/edit/{bill}', [BillController::class, 'edit'])->name('bills.edit');
Route::post('/bills/edit/{bill}', [BillController::class, 'update'])->name('bills.edit');
Route::post('/bills/delete/{bill}', [BillController::class, 'destroy'])->name('bills.delete');


//INVOICE_DETAILS}
Route::get('/invoice_details', [InvoiceDetailController::class, 'index'])->name('invoice_details.index');
Route::get('/invoice_details/create', [InvoiceDetailController::class, 'create'])->name('invoice_details.create');
Route::post('/invoice_details/create', [InvoiceDetailController::class, 'store'])->name('invoice_details.create');
Route::get('/invoice_details/edit/{invoice_detail}', [InvoiceDetailController::class, 'edit'])->name('invoice_details.edit');
Route::post('/invoice_details/edit/{invoice_detail}', [InvoiceDetailController::class, 'update'])->name('invoice_details.edit');
Route::post('/invoice_details/delete/{invoice_detail}', [InvoiceDetailController::class, 'destroy'])->name('invoice_details.delete');


Route::get('/', function () {
    return view('welcome');
});
