<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\project;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // creating a new view
        $view = new View();
        $view->view = 1;
        $view->save();
        return view('main');
    }
    public function allprojects()
    {
        // getting all the projects
        $data['projects'] = Project::all();
        return view('allprojects', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/')->with('toast_error', 'Please fill all the fields');
        }else{
            $home = new Home();
            $home->name = $request->name;
            $home->email = $request->email;
            $home->message = $request->message;
            $home->save();
            return redirect('/')->with('success', 'Message sent successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // deleting a message
        $home = Home::find($id);
        $home->delete();
        return redirect('/dashboard')->with('success', 'Message deleted successfully');
    }
    // dashboard
    public function dashboard()
    {
        // couting the views
        $data['view'] = View::count();
        // getting the messages
        $data['messages'] = Home::all();
        return view('dashboard', compact('data'));
    }
    // project

    public function project()
    {
        // getting the projects
        $data['projects'] = Project::all();
        return view('project', compact('data'));
    }
    // store project
    public function storeProject(Request $request)
    {
        // validating the project
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/project')->with('toast_error', 'Please fill all the fields');
        }else{
            $project = new Project();
            $project->name = $request->name;
            $project->description = $request->description;
            $project->link = $request->link;
            $project->image = $request->image;
            $project->github = $request->github;
            $project->save();
            return redirect('/project')->with('success', 'Project added successfully');
        }
    }
    public function addProject()
    {
        return view('addProject');
    }
}
