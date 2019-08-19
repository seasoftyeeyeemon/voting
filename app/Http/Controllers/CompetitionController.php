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
    public function create()
    {
        return view('user.competition.create');
    }
  public function competitionCreate(Request $request){

    $validatedData = $request->validate([
        'name' => 'required',
        'address' => 'required',
        'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'age' => 'required',
        'education' => 'required',
    ]);

    if(empty($request->session()->get('competition'))){
        $competition = new Competition();
        $fileName = "image-" . time() . '.' . request()->featured_image->getClientOriginalExtension();
        $request->featured_image->storeAs('featured_image', $fileName);
        $competition->fill($validatedData);
       
        $request->session()->put('competition', $competition);
    }else{
        $competition = $request->session()->get('competition');
        $fileName = "image-" . time() . '.' . request()->featured_image->getClientOriginalExtension();
        $request->featured_image->storeAs('featured_image', $fileName);
        $competition->image = $fileName;
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
        request()->validate([

            'featured_image' => 'required',
            'name'=>'required',
            'address'=>'required',
            'education'=>'required',
            'age'=>'required',
            'activity'=>'required',
            'phone'=>'required'

        ]);
        $imageName = time().'.'.request()->featured_image->getClientOriginalExtension();
        request()->featured_image->move(public_path('images'), $imageName);
        $competition->name=$request->name;
        $competition->address=$request->address;
        $competition->education=$request->education;
        $competition->age=$request->age;
        $competition->activity=$request->activity;
        $competition->event_id=1;
        $competition->phone=$request->phone;
        $competition->user_id=Auth::user()->id;
        $competition->photo=$imageName;   
       
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
