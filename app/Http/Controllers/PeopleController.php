<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\People;
use \Redirect;
use \Session;
use \View;



    class PeopleController extends Controller
    {

        /**
        * Display of resource
        *
        * @return Response
        */
        public function index()
        {
            $people = People::all();

            // load the view and pass the nerds
            return View::make('people.index')
                    ->with('people', $people);
        }

        /**
        *Creating a new resource.
        *
        * @return Response
        */
        public function create()
        {
            return View::make('people.create');
        }

    /**
    * Store a resource in storage.
    *
    * @return Response
    */
    public function store(Request $request)
    {
    // validate
    // read more on validation at http://laravel.com/docs/validation
    $rules = array(
    'name'       => 'required',
    'lastname'       => 'required',
    'sex'       => 'required',
    'email'      => 'required',
    'address'      => 'required',
    'date_of_birth'      => 'required',
    'user' => 'required'
    );

    $validator = $request->validate($rules);

    // // process the login
    // store
    $people_store = new People;
    $people_store->name    = $request->input('name');
    $people_store->lastname      = $request->input('lastname');
    $people_store->sex = $request->input('sex');
    $people_store->email = $request->input('email');
    $people_store->date_of_birth = $request->input('date_of_birth');
    $people_store->user = $request->input('user');
    $people_store->address = $request->input('address');
    $people_store->save();

    // redirect
    Session::flash('message', 'Successfully created nerd!');
    return Redirect::to('people');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
    // get the nerd
        $people = People::find($id);

    // show the view and pass the nerd to it
    return View::make('people.show')
    ->with('people', $people);
    }

/**
* Editing the specified resource.
*
* @param  int  $id
* @return Response
*/
    public function edit($id)
    {
    $people = People::find($id);

    // show the edit form and pass the nerd
    return View::make('people.edit')
    ->with('people', $people);
    }

    /**
    * Update resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id,Request $request)
    {
    // validate
    // read more on validation at http://laravel.com/docs/validation
    $rules = array(
    'name'       => 'required',
    'lastname'       => 'required',
    'sex'       => 'required',
    'email'      => 'required',
    'address'       => 'required',
    'date_of_birth'       => 'required',
    'user' => 'required'
    );

    $validator = $request->validate($rules);

    // process the login
    // store
    $people_edit = People::find($id);
    $people_edit->name       = $request->input('name');
    $people_edit->lastname      = $request->input('lastname');
    $people_edit->sex      = $request->input('sex');
    $people_edit->email      = $request->input('email');
    $people_edit->address      = $request->input('address');
    $people_edit->date_of_birth = $request->input('date_of_birth');
    $people_edit->user = $request->input('user');
    $people_edit->save();

    // redirect
    Session::flash('message', 'Successfully updated nerd!');
    return Redirect::to('people');
}

    /**
    * Remove the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
    // delete
    $people = People::find($id);
    $people->delete();

    // redirect
    Session::flash('message', 'Successfully deleted the nerd!');
    return Redirect::to('people');
    }


}
