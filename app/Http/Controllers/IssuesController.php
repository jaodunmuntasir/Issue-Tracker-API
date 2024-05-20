<?php

namespace App\Http\Controllers;

use App\Models\Issues;
use App\Http\Requests\StoreIssuesRequest;
use App\Http\Requests\UpdateIssuesRequest;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreIssuesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Issues $issues)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issues $issues)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssuesRequest $request, Issues $issues)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issues $issues)
    {
        //
    }
}
