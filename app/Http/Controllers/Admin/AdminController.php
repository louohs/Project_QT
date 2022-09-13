<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function allQuestionsVisitors()
    {
        $questions = $this->admin->allQuestionsVisitors();

        return view("admin.questions", ["questions" => $questions]);
    }

    public function quizVisitors($id)
    {
        $this->admin->quizVisitors($id);
        return redirect('admin/questions/{id}');
    }
}
