<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\QuestionsController;
use Illuminate\Support\Facades\Route;

// -----------
// A D M I N :
// -----------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route dans laquelle le prefix permet de suivre le chemin des noms de différentes class.
// Le middleware lui permet de se diriger dans l'authenticate lié à l'admin déclaré dont "admin",
// Je regroupe tout cela avec une fonction permettant d'intégrer les routes à l'admin.
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/questions', [AdminController::class, 'allQuestionsVisitors'])->name('admin.questions');
    Route::get('/questions/{id}', [AdminController::class, 'quizVisitors'])->name('admin.show');
});

require __DIR__ . '/auth.php';

// -------------------
// V I S I T E U R S :
// -------------------

// Route qui mène vers la home pour que le visiteur puisse répondre au questionnaire :
Route::get('/', [QuestionsController::class, 'index'])->name('questions.index');

// Route qui mène vers la création des réponses au questionnaire :
Route::get('/questions/create', [QuestionsController::class, 'create'])->name('questions.create');

// Route qui enregistre toutes les réponses stockées dans la base de données :
Route::post('/questions/success', [QuestionsController::class, 'store'])->name('questions.store');

// Route qui affiche un id du visiteur dès lors qu'il inscrit ses réponses au questionnaire :
Route::get('/questions/{id}', [QuestionsController::class, 'show'])->name('questions.show');
