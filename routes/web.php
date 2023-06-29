<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MagangController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\TeknisiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Berita;
use App\Http\Controllers\Event;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('event', [HomeController::class, 'event'])->name('event');

Route::get('teknisi', [HomeController::class, 'teknisi'])->name('teknisi');



// Route::get('berita', [Berita::class, 'index'])->name('berita');
// Route::get('berita/{slug_berita}', [Berita::class, 'show'])->name('berita.detail');

Route::get('event', [Event::class, 'index'])->name('event');
Route::get('event/{slug_event}', [Event::class, 'show'])->name('event.detail');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.detail');
Route::get('sejarah', [PageController::class, 'sejarah'])->name('sejarah');
Route::get('visi_misi', [PageController::class, 'visi_misi'])->name('visi_misi');
Route::get('dosen', [PageController::class, 'dosen'])->name('dosen');
Route::get('prodi_manajemen_informatika', [PageController::class, 'prodi_mi'])->name('prodi_mi');
Route::get('prodi_komputerisasi_akutansi', [PageController::class, 'prodi_ka'])->name('prodi_ka');
Route::get('Prodi_Teknik_Komputer', [PageController::class, 'prodi_tk'])->name('prodi_tk');
Route::get('kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('kerjasama_magang', [HomeController::class, 'kerjasama_magang'])->name('kerjasama_magang');




Route::post('/upload',[UploadController::class,'upload']);


// Route::get('/login', [PageController::class, 'login'])->name('login');

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::middleware(['auth', 'admin'])->group(function () {
// Route::group(['prefix' =>'admin' , 'middleware' => ['auth', 'admin']], function () {

     // Banner
     Route::get('admin/banner', [BannerController::class, 'index'])->name('banner.index');
     Route::post('admin/banner/store', [BannerController::class, 'store'])->name('banner.store');
     Route::get('admin/banner/{id_banner}', [BannerController::class, 'edit'])->name('banner.edit');
     Route::patch('admin/banner/{id_banner}', [BannerController::class, 'update'])->name('banner.update');
     Route::delete('admin/banner/{id_banner}', [BannerController::class, 'destroy'])->name('banner.destroy');

    // Berita
    // Route::resource('admin/berita', 'BeritaController');
    Route::get('admin/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('admin/berita/create', [BeritaController::class, 'create'])->name('berita.create');
    Route::post('admin/berita/store', [BeritaController::class, 'store'])->name('berita.store');
    Route::delete('admin/berita/destroy/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::get('admin/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

       // Event
    // Route::resource('admin/event', 'EventController');
    Route::get('admin/event', [EventController::class, 'index'])->name('event.index');
    Route::get('admin/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('admin/event/store', [EventController::class, 'store'])->name('event.store');
    Route::delete('admin/event/destroy/{id}', [EventController::class, 'destroy'])->name('event.destroy');
    Route::get('admin/event/{id}', [EventController::class, 'show'])->name('event.show');



    // Magang
    Route::get('admin/magang', [MagangController::class, 'index'])->name('magang.index');
    Route::post('admin/magang/store', [MagangController::class, 'store'])->name('magang.store');
    Route::get('admin/magang/{id_magang}', [MagangController::class, 'edit'])->name('magang.edit');
    Route::delete('admin/magang/destroy/{id_magang}', [MagangController::class, 'destroy'])->name('magang.destroy');
    Route::patch('admin/magang/update/{id_magang}', [MagangController::class, 'update'])->name('magang.update');

    // Staff
    Route::get('admin/staff', [StaffController::class, 'index'])->name('staff.index');
    Route::post('admin/staff/store', [StaffController::class, 'store'])->name('staff.store');
    Route::delete('admin/staff/destroy/{id_staff}', [StaffController::class, 'destroy'])->name('staff.destroy');
    
    //teknisi
    Route::get('admin/teknisi', [TeknisiController::class, 'index'])->name('teknisi.index');
    Route::post('admin/teknisi/store', [TeknisiController::class, 'store'])->name('teknisi.store');
    Route::delete('admin/teknisi/destroy/{id_teknisi}', [TeknisiController::class, 'destroy'])->name('teknisi.destroy');



    // Roles
    Route::resource('admin/roles', RolesController::class);

    // Route::get('admin/roles', [RolesController::class, 'index'])->name('roles.index');
    // Route::post('admin/roles/store', [RolesController::class, 'store'])->name('roles.store');
    // Route::delete('admin/roles/destroy/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');
    
    //Permission
    Route::resource('admin/permission', PermissionController::class); 

    // User
    Route::resource('admin/users', UserController::class);

    // Route::get('admin/user', [UserController::class, 'index'])->name('users.index');
    // Route::get('admin/user/create', [UserController::class, 'create'])->name('users.create');
    // Route::post('admin/user/store', [UserController::class, 'store'])->name('users.store');
    // Route::get('admin/user/{id}', [UserController::class, 'edit'])->name('users.edit');
    // Route::delete('admin/user/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    // Route::patch('admin/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    // Profile
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.index');
    Route::patch('admin/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('ubahfoto',[ProfileController::class, 'ubahfoto'])->name('ubahfoto');
});








// Students
// Route::get('/students', [StudentsController::class, 'index']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::patch('/students/{student}', [StudentsController::class, 'update']);
