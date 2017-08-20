<?php

namespace Employee\Http\Controllers;

use Illuminate\Http\Request;
use Employee\Models\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::get();
        return view('companies.index',['companies'=>$companies]);
    }

    public function store(Request $request){
        $slug = str_replace(' ','-', strtolower(trim($request->name)));
        $company = new Company;
        $company->name = ucfirst($request->name);
        $company->slug = $slug;
        if($company->save()){
            return redirect('/companies')->with('message',"Company saved successfully");
        }else{
            return redirect('/companies')->with('error',"Cannot save record");
        }
    }

    public function show($slug)
    {
        $data['company'] = Company::where('slug',$slug)->first();
        $data['pageTitle'] = "Companies";
         
        if($data['company']){
            return view('companies.view',$data);
        }else{
            return redirect('/companies')->with('error',"Record does not exist");
        }
    }

    public function delete($slug)
    {
        $company = Company::where('slug',$slug);
       
        if($company->delete()){
           return redirect('/companies')->with('warning',"Company deleted");
        }else{
            return redirect('/companies')->with('error',"Record does not exist");
        }
    }
}
