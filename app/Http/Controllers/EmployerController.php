<?php

namespace App\Http\Controllers;

use App\Employer;
use App\Department;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployerController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $employers = Employer::join( 'departments', 'dep_id', '=', 'departments.id' )
        ->orderBy( 'employers.start_date', 'desc' )
        ->paginate( 10 );
        return view( 'employers.index', compact( 'employers' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        if ( $request->file( 'XML' ) ) {
            $path = Storage::putFile( 'public', $request->file( 'XML' ) );

            $xml =  simplexml_load_file ( $request->file( 'XML' ) );

            foreach ( $xml->employer as $XML_employer ) {
                $employer = new Employer();
                //$department = new Department();

                $employer->emp_name = $XML_employer->emp_name;
                $employer->dep_id = $XML_employer->dep_id;
                $employer->salary_type = $XML_employer->salary_type;
                $employer->salary_value = $XML_employer->salary_value;
                $employer->start_date = $XML_employer->start_date;
                
                //$department->name = $XML_employer-> dep_name;
                //$department->id = $XML_employer-> dep_id;

                $employer->save();
                //$department->save();

            }
        }
        return redirect()->route( 'index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id = 0, $p = 10 ) {
        $employers = Employer::join( 'departments', 'dep_id', '=', 'departments.id' )
        ->where( 'departments.id', 'like', '%'.$id.'%' )
        ->paginate( $p );
        //->get();
        return view( 'employers.index', compact( 'employers' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //
    }
}
