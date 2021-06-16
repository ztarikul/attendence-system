<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/post/{post}', [PostController::class, 'show'])->name('post');

Route::post('/search', [PostController::class, 'search_post'])->name('search_post');

Route::middleware('auth')->group(function(){

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/posts/create', [PostController::class, 'create'])->name('post.create');

Route::post('/admin/posts', [PostController::class, 'store'])->name('post.store');

Route::post('/comment/{post}', [CommentController::class, 'store'])->name('comment.store');

Route::get('/profile', [HomeController::class, 'show'])->name('user.show');

Route::put('/profile', [HomeController::class, 'update'])->name('user.update');

Route::get('/your_post', [PostController::class, 'view_all_post'])->name('user.posts');

Route::get('/view_all_post', [PostController::class, 'view_all_users_post'])->name('user_all.posts');

Route::get('/delete_post/{post}', [PostController::class, 'delete_post'])->name('post_delete');

Route::get('/edit_post/{post}', [PostController::class, 'edit_post'])->name('post_edit');

Route::put('/update/{post}', [PostController::class, 'update'])->name('post.update');

Route::get('/like/{post}', [LikeController::class, 'liked_post'])->name('post.like');

Route::get('/unlike/{post}', [LikeController::class, 'unliked_post'])->name('post.unlike');


Route::get('/admin/role', [RoleController::class, 'create_role'])->name('create.role');

Route::post('/admin/create_role', [RoleController::class, 'store'])->name('role.store');

Route::get('/admin/all_roles', [RoleController::class, 'show'])->name('show.roles');

Route::get('/admin/role/delete/{role}', [RoleController::class, 'delete'])->name('role_delete');

Route::get('/admin/role/edit/{role}', [RoleController::class, 'edit'])->name('role_edit');

Route::post('/admin/role/update/{role}', [RoleController::class, 'update'])->name('role_update');

Route::get('/user_role_manage', [RoleController::class, 'user_role_manage'])->name('user_role_manage');

Route::get('/add_user_role/{user}', [RoleController::class, 'add_user_role'])->name('add_user_role');

Route::post('/user_role_create/{user}', [RoleController::class, 'user_role_create'])->name('user_role_create');

Route::get('/delete_user_role/{user}', [RoleController::class, 'delete_user_role'])->name('delele_user_role');
Route::post('/user_role_deleted/{user}', [RoleController::class, 'user_role_deleted'])->name('user_role_deleted');


Route::resource('category', CategoryController::class);

// Route::resource('employee', EmployeeController::class);

Route::get('/emp_print/{id}', [InvoiceController::class, 'emp_data_print'])->name('emp_data_print');
Route::get('/print_page', [InvoiceController::class, 'print_page'])->name('print.page');



Route::get('/admin_reports', [AdminController::class, 'admin_reports'])->name('admin.reports');
Route::post('/report_generates', [AdminController::class, 'report_generates'])->name('report.generates');


Route::resource('guest', GuestController::class);

Route::get('/guest_employee', 'GuestController@employeeindex')->name('guest.employee');
Route::get('/management', 'GuestController@managementindex')->name('guest.management');
Route::get('/special', 'GuestController@specialindex')->name('guest.special');

Route::resource('attendance', AttendanceController::class);


});