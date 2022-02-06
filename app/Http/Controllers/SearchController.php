<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use DB;
use Facade\FlareClient\Http\Response;
use App\Models\Assignment;

class SearchController extends Controller
{
    //search index
    public function index()
    {
        return view('search.search');
    }


      /**
     * validating and storing the assignment.
     * 
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchAssignment(Request $request)
    {

        $searchQuery = $request->get('searchRequest');

        $returnedAssignment = Assignment::where('course_code', 'like', '%' . $searchQuery . '%')->get();

        return json_encode($returnedAssignment);

        // if ($request->ajax()) {
        //     $output = "";

        //     $products = DB::table('products')->where('title', 'LIKE', '%'.$request->search."%")->get();

        //     if ($products) {
        //         foreach ($products as $key => $product) {
        //             $output = '<tr>'. 
        //             '<td>'.$product->id.'</td>'.
        //             '<td>'.$product->id.'</td>'.
        //             '<td>'.$product->id.'</td>'.
        //             '<td>'.$product->id.'</td>'.
        //             '</tr>';
        //         }
        //         return Response($output);
        //     }
        // }



    }
}
