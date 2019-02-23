<?php

namespace App\Http\Controllers;

use App\Question;
use App\Http\Resources\QuestionResource;
use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Appliquer le resource sur un tableau des objets
        return QuestionResource::collection(Question::all());
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = Question::create([
            'title' => $request->title,
            'slug'  => str_slug($request->title),
            'body'  => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id 
        ]);

        return response(['data' => $question], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {   
        //Appliquer le resource sur une seule instance
        return new QuestionResource($question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, Question $question)
    {
        $question->update([
            'title' => $request->title,
            'slug'  => str_slug($request->title),
            'body'  => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id 
        ]);

        return response('updated', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return response('deleted', 204);
    }
}
