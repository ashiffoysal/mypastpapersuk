<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get("/clear", function () {
	Artisan::call("config:clear");
	Artisan::call("cache:clear");
	return 'Done';
});
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'home']);
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\FrontendController::class, 'privacyPolicy']);
Route::get('/about-us', [App\Http\Controllers\Frontend\FrontendController::class, 'aboutUs']);
Route::get('/terms-condition', [App\Http\Controllers\Frontend\FrontendController::class, 'termsCondition']);
Route::get('/blogs', [App\Http\Controllers\Frontend\FrontendController::class, 'blogs']);
Route::get('/blog-details/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'blogsDetails']);

Route::get('/faq', [App\Http\Controllers\Frontend\FrontendController::class, 'faq']);
Route::get('/contact-us', [App\Http\Controllers\Frontend\FrontendController::class, 'contactUs']);
Route::post('/contact-us', [App\Http\Controllers\Frontend\FrontendController::class, 'contactStore']);
Route::get('/get-free-resources', [App\Http\Controllers\Frontend\FrontendController::class, 'GetFreeResources']);


Route::get('/subject-details/{exam_type}/{exam_board}', [App\Http\Controllers\Frontend\FrontendController::class, 'boardWiseSubject']);
Route::get('/subject-exampaper/{subject_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'subjectExamExampaper']);

Route::get('/subject-board/{exam_type}', [App\Http\Controllers\Frontend\FrontendController::class, 'examBoard']);



Route::get('/pastpaper', [App\Http\Controllers\Frontend\PastPaperController::class, 'pastpaper']);
Route::get('pastpaper/subjects/{slug}', [App\Http\Controllers\Frontend\PastPaperController::class, 'pastpaperCategory']);
Route::get('pastpaper/board/{id}', [App\Http\Controllers\Frontend\PastPaperController::class, 'pastpaperBoard']);
Route::get('pastpaper/paper/{id}', [App\Http\Controllers\Frontend\PastPaperController::class, 'pastpaperPaper']);



Route::get('/board/aqa', [App\Http\Controllers\Frontend\FrontendController::class, 'pastpaperAqa']);
Route::get('/board/edexcel', [App\Http\Controllers\Frontend\FrontendController::class, 'pastpaperEdexcel']);
Route::get('/board/ocr', [App\Http\Controllers\Frontend\FrontendController::class, 'pastpaperOcr']);
Route::get('/board/wjec', [App\Http\Controllers\Frontend\FrontendController::class, 'pastpaperWjec']);


Route::get('/pastpaper/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'pastpapersSubject']);








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin', [App\Http\Controllers\Backend\DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/subject', [App\Http\Controllers\Backend\SubjectController::class, 'allSubject'])->name('admin.allSubject');

Route::get('/admin/subject-create', [App\Http\Controllers\Backend\SubjectController::class, 'createSubject'])->name('admin.createSubject');
Route::post('/admin/subject-create', [App\Http\Controllers\Backend\SubjectController::class, 'StoreSubject']);

//


Route::get('/admin/category-index', [App\Http\Controllers\Backend\SubjectController::class, 'category']);
Route::get('/admin/subcategory-index', [App\Http\Controllers\Backend\SubjectController::class, 'subcategory']);
Route::get('/admin/resubcategory-index', [App\Http\Controllers\Backend\SubjectController::class, 'resubcategory']);

Route::get('/admin/category-active/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'activecategory']);
Route::get('/admin/subcategory-active/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'activesubcategory']);
Route::get('/admin/resubcategory-active/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'activeresubcategory']);


Route::get('/admin/category-deactive/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'deactivecategory']);
Route::get('/admin/subcategory-deactive/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'deactivesubcategory']);
Route::get('/admin/resubcategory-deactive/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'deactiveresubcategory']);
 

Route::get('/admin/file-index', [App\Http\Controllers\Backend\SubjectController::class, 'fileIndex'])->name('admin.fileIndex');
Route::get('/admin/file-delete/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'fileDelete']);
Route::get('/admin/file-edit/{id}', [App\Http\Controllers\Backend\SubjectController::class, 'fileEdit']);
Route::post('/admin/file-update', [App\Http\Controllers\Backend\SubjectController::class, 'fileUpdate'])->name('admin.fileUpdate');


//
Route::get('/admin/blog-create', [App\Http\Controllers\Backend\BlogController::class, 'blogCreate'])->name('admin.blogCreate');
Route::post('/admin/blog-create', [App\Http\Controllers\Backend\BlogController::class, 'blogStore'])->name('admin.blogStore');
Route::get('/admin/blog-index', [App\Http\Controllers\Backend\BlogController::class, 'blogIndex'])->name('admin.blogIndex');
Route::get('/admin/blog-delete/{id}', [App\Http\Controllers\Backend\BlogController::class, 'blogDelete']);
Route::get('/admin/blog-edit/{id}', [App\Http\Controllers\Backend\BlogController::class, 'blogEdit']);
Route::post('/admin/blog-update', [App\Http\Controllers\Backend\BlogController::class, 'blogUpdate'])->name('admin.blogUpdate');

// pastpaper
Route::get('get/subject/all/{exam_type}/{board}', [App\Http\Controllers\Backend\PastPaperController::class, 'getSubject']);
Route::post('/admin/file-create', [App\Http\Controllers\Backend\SubjectController::class, 'fileStore'])->name('admin.fileCreate');
Route::get('/admin/file-create', [App\Http\Controllers\Backend\SubjectController::class, 'fileCreate'])->name('admin.fileCreate');
