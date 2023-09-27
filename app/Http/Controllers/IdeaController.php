<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Requests\StoreideaRequest;
// use App\Http\Requests\UpdateideaRequest;
use App\Models\Idea;
use App\Models\Vote;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('idea.index' );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreideaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(idea $idea)
   {
        return view('idea.show',[
            'idea'=>$idea,
            'votesCount' => $idea->votes->count(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateideaRequest $request, idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(idea $idea)
    {
        //
    }
}
