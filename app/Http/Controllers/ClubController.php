<?php

namespace App\Http\Controllers;

use App\Models\club;
use Illuminate\Http\Request;
use App\Http\Requests\ClubValidation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = DB::table('clubs')->paginate(5);

        return view('clubs',compact('clubs'));
    }

    //search 
    public function search($value)
    {   
        $clubs=DB::table('clubs')->where('business_name','LIKE','%'.$value."%")->orWhere('club_name','LIKE','%'.$value."%")->orWhere('club_state','LIKE','%'.$value."%")->get();
        return Response()->json($clubs);            
    } 

    
    /**
     * Show the form for creating a new resource.
     */
    public function fetchclub(Request $request)
    {   
        $clubs = club::all();
        return response()->json([
            'clubs'=>$clubs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClubValidation $request)
    {       
        $validator = Validator::make($request->all(), [
            'business_name' => 'required',
            'club_number' => 'required',
            'club_name' => 'required',
            'club_state' => 'required',
            'club_description' => 'required',
            'club_slug' => 'required',
            'website_title' => 'required',
            'website_link' => 'required',
            'club_logo' => 'required',
            'club_banner' => 'required',
        ]);

        if($validator){
            $bannerPath = public_path('uploads/banner');
            $logoPath = public_path('uploads/logo');

            $bannerFile = $request->file('club_banner');
            $logoFile = $request->file('club_logo');


            if ($logoFile->isValid() &&  $bannerFile->isValid()) {
                $logo = time() . '.' . $logoFile->getClientOriginalExtension();
                $banner = time() . '.' . $bannerFile->getClientOriginalExtension();
                $logoFile->move($logoPath, $logo);
                $bannerFile->move($bannerPath, $banner);
            }

                $Logo = "uploads/logo/$logo";
                $Banner = "uploads/banner/$banner";
                    

                $clubs = new club();
                $clubs->group_id = $request->input('group_id');
                $clubs->business_name = $request->input('business_name');
                $clubs->club_number = $request->input('club_number');
                $clubs->club_name = $request->input('club_name');
                $clubs->club_state = $request->input('club_state');
                $clubs->club_description = $request->input('club_description');
                $clubs->club_slug = $request->input('club_slug');
                $clubs->website_title = $request->input('website_title');
                $clubs->website_link = $request->input('website_link');
                $clubs->club_logo = $Logo;
                $clubs->club_banner = $Banner; 
                $clubs->save();
               
                return response()->json(['data' => $clubs]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(club $club)
    {
        if($club){
            return response()->json(['status' => 'success', 'data' => $club]);
        }
        else{
        return response()->json(['status' => 'Failed', 'data' => 'no products Found']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $club = club::where('id',$id)->first();
        return response()->json($club);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {       
        $club = club::update('id',$id);
        dd($id);
                return response()->json([
                    'status' => 200,
                    'message' => 'Club updated successfully', 
                    'data' => $club,
                ]);            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(club $club,$id)
    {
        $club = club::find($id);
        if($club)
        {
            $club->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Product Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Product Found.'
            ]);
        }
    }
}
