<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ---------------------------------
    // J'affiche ma home afin que les visiteurs puissent accéder aux questionnaires :
    public function index()
    {
        $questions = Question::all();

        return view("questions.index", ["questions" => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ---------------------------------
    // Je retourne ma vue en affichant le questionnaire :
    // - Pour que les visiteurs puissent répondre aux questions.
    public function create()
    {
        return view("questions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // ---------------------------------
    // Lorsqu'ils ont terminé de répondre ces derniers, ils peuvent à la fin,
    // indiquer leurs adresses mail en spécifiant bien qu'ils ont bien écrit leurs adresses.
    public function store(Request $request)
    {
        // Je demande au request de valider mes valeurs,
        // afin que cela puisse s'enregistrer à la base de données.
        $request->validate([
            "resone" => "string",
            "restwo" => "string",
            "resthree" => "string",
            "resfour" => "string",
            "resfive" => "string",
            "email" => "nullable|email|max:191",
        ], [
            "resone.string" => "Votre réponse est invalide.",
            "restwo.string" => "Votre réponse est invalide.",
            "resthree.string" => "Votre réponse est invalide.",
            "resfour.string" => "Votre réponse est invalide.",
            "resfive.string" => "Votre réponse est invalide.",
            "email.string" => "Votre email n'est pas écrit correctement.",
        ]);

        Question::create([
            "resone" => $request->resone,
            "restwo" => $request->restwo,
            "resthree" => $request->resthree,
            "resfour" => $request->resfour,
            "resfive" => $request->resfive,
            "email" => $request->email
        ]);

        return view("questions.store");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // -----------------------------------
    // Cette public function sert à trouver l'id du questionnaire d'un seul visiteur.
    public function show($id)
    {
        $questions = Question::find($id);
        return view("questions.show", compact("questions"));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
