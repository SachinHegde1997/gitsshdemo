<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Work::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        $work=Work::create([
            'name'=>$request->username,
            'age'=>$request->age,
            'willingtowork'=>$request->willingtowork,
            'languages'=> json_encode($request->languages),
            'gender'=>$request->gender,

        ]);
        
        
        return $work;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Work::find($id);
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
        $work=Work::find($id);
        $work->update($request->all());
        return $work;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Work::destroy($id);
    }
	
	public function arrayDemo(){
		
		$arr = [['first_name' => 'Abc', 'last_name' => 'xyz', 'email'=>'abc@aaa.com'],
		['first_name' => 'Lmn', 'last_name' => 'qqq', 'email'=>'lmn@aaa.com'],
		['first_name' => 'pqr', 'last_name' => 'rrr', 'email'=>'pqr@aaa.com']
		];
		foreach($arr as $array)
		{
			if($array['last_name']=='qqq'){
				$array['email']=$array['last_name'].'@gmail.com';
				return $array;
			}
		}
		
	}
}
