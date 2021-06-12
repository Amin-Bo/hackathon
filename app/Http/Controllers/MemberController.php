<?php

namespace App\Http\Controllers;

use App\Member;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkIfMember');
    }
    public function index()
    {
        $member = Member::with(['clubs','user'])->where("members.email","=",Auth::user()->email)->get();
        dd($member);
        return '';
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $count= DB::select('select count(email) from clubs where email = ?', [Auth::user()->email]);
        //dd($count[0]);
        $member = Member::with(['clubs','user'])->where("members.email","=",Auth::user()->email)->get();
        return view('member.show',['member'=>$member,'count'=>$count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member , User $user)
    {
        //  dd($request);
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required',
            'role'=>'',
            
        ]);
        
        $validatedData['password']=Hash::make($validatedData['password']);
        $validatedData2 = $request->validate([
            'age' => 'required',
            'description'=> 'required',
            'adresse'=> 'required'
        ]);
        DB::update('update users set name = ? , email = ? , password = ?  where email = ?',[$validatedData['name'],$validatedData['email'],$validatedData['password'],Auth::user()->email]);
        DB::update('update members set age = ? , description = ? , adresse = ?  where email = ?',[$validatedData2['age'],$validatedData2['description'],$validatedData2['adresse'],Auth::user()->email]);
        return redirect()->back()->with('msg','Votre profile est mis a jour ');            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
