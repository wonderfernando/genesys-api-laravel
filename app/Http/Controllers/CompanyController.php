<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Exceptions\CompanyNotFoundException;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Company $company){
        $this->company = $company;
    }

    public function index()
    {
        return $this->company::all();
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       $company = $this->company::create($request->all());
       return $company;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $company = $this->company->findOrFail($id);
            return $company;
        } catch (\Throwable $th) {
            return response()->json(["code"=>"NotFound","message"=>"Nenhum registro encontrado"],404);
        }
     
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $company = $this->company->findOrFail($id);
        $company->update($request->all());
        return $company;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
              $company = $this->company->findOrFail($id);
              $company->delete();
        } catch (\Throwable $th) {
            throw new CompanyNotFoundException;
        }
      
    }
}
