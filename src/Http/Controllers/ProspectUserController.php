<?php

namespace App\Http\Controllers;

use App\Models\ProspectUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use MCDev\ProspectUsers\Http\Requests\ProspectRequest;

class CandidateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProspectRequest $request)
    {
        $candidate = $request->except('_token');
        $candidate['token'] = Str::random(60);
        $candidate['expire'] = Carbon::now()->addHours(8);

        $candidate =  ProspectUser::create($candidate);

        $candidate->sendEmailNotification();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProspectUser  $ProspectUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProspectUser $ProspectUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProspectUser  $ProspectUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ProspectUser $ProspectUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProspectUser  $ProspectUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProspectUser $ProspectUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProspectUser  $ProspectUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProspectUser $ProspectUser)
    {
        //
    }
}
