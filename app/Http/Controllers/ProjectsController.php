<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::all();
        return view('adminHome', compact('projects'));
    }

    public function indexProject(){
        $projects = Projects::all();
        return view('main.userView', compact('projects'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'link' => 'required'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'projects_image/';
            $projectImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $projectImage);
            $input['image'] = "$projectImage";
        }
        Projects::create($input);
        return redirect()->route('product.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $projects)
    {
        return view('main.product.show', compact('projects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $projects)
    {
        return view('main.product.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $projects)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'link' => 'required'
        ]);
    
        $input = $request->all();
    
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'projects_image/';
        //     $projectImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $projectImage);
        //     $input['image'] = "$projectImage";
        // }
        if ($image = $request->file('image')) {
            // Hapus gambar lama jika ada
            if ($projects->image) {
                $oldImagePath = public_path('projects_image/' . $projects->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Pindahkan dan simpan gambar baru
            $destinationPath = 'projects_image/';
            $projectImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $projectImage);
            $input['image'] = $projectImage;
        }


    
        $projects->update($input);

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $projects)
    {

        $imagePath = public_path('projects_image/' . $projects->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $projects->delete();

        return redirect()->route('product.index')
            ->with('success', 'Project deleted successfully.');
    }
}
