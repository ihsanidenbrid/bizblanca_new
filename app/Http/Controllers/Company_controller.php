<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Company;

class Company_controller extends Controller
{
    //
    public function company_details()
    {
    	$company_data = Company::all();
    	$view= View::make('user/companies_detail',['company_data'=>$company_data]);
        $view->nest('header','template.header');
        $view->nest('footer','template.footer');
        return $view;
    }
}
