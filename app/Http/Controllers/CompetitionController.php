<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competition;
use Auth;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions=Competition::where('user_id',Auth::id())->get();
       
        return view('user.competition.index',compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$event_id)
    {
        $eventid=$event_id;
        $competition = $request->session()->get('competition');
        return view('user.competition.create',compact('eventid','competition'));
    }
  public function competitionCreate(Request $request){

    $validatedData = $request->validate([
        'name' => 'required',
        'address' => 'required',
        'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'age' => 'required',
        'phone'=>'required|min:11|max:11',
        'activity'=>'required',
        'education' => 'required',
    ]);
    

    if(empty($request->session()->get('competition'))){
        $competition = new Competition();
        $fileName = "image-" . time() . '.' . request()->featured_image->getClientOriginalExtension();
        $request->featured_image->storeAs('featuredImg', $fileName);
        $competition->photo = $fileName;
        $competition->event_id=$request->event_id;
        $competition->user_id=Auth::user()->id;
        $competition->fill($validatedData);
        $request->session()->put('competition', $competition);
    }else{
        $competition = $request->session()->get('competition');
        $fileName = "image-" . time() . '.' . request()->featured_image->getClientOriginalExtension();
        $request->featured_image->storeAs('featuredImg', $fileName);
        $competition->photo = $fileName;
        $competition->fill($validatedData);
        $request->session()->put('competition', $competition);
    }
    

    return redirect('competitions/create-preview');

  }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function createPreview(Request $request)
    {
        $competition = $request->session()->get('competition');
        return view('user.competition.preview',compact('competition',$competition));
    }

    public function store(Request $request){

        $competition=new Competition();
        $competition = $request->session()->get('competition'); 
        $competition->save();
        return redirect()->route('competitions.index')

            ->with('success','You have successfully upload image.')

            ->with('images',$imageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
