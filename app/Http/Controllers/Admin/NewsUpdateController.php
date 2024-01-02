<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsUpdateCreateRequest;
use App\Models\NewsUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class NewsUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_updates = NewsUpdate::all();
        return view('admin.news.index', compact('news_updates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(NewsUpdate $news_update)
    {
        return view('admin.news.create', compact('news_update'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsUpdateCreateRequest $request)
    {
        //create news update image name and store image
        $news_update_image_name = $request->file('image')->store('public/news_update_images');

            //create new news update
            NewsUpdate::create([
                'headline' => $request->headline,
                'author' => $request->author,
                'image' => $news_update_image_name,
                'date' => $request->date,
                'details' => $request->details,
            ]);
        // return back with success message
        return to_route('admin.news-updates.index')->with('success', 'News update added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsUpdate $news_update)
    {
        return view('admin.news.edit', compact('news_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsUpdate $news_update)
    {
        $request->validate([
            'image' => 'required',
            'date' => 'required',
            'headline' => 'required',
            'author' => 'required',
            'details' => 'required',
        ]);
        ///delete image
        if ($request->hasFile('image')) {
            Storage::delete('image');
            //create news update image name and store image
            $news_update_image_name = $request->file('image')->store('public/news_update_images');
        }

        //update news update
        $news_update->update([
            'headline' => $request->headline,
            'author' => $request->author,
            'image' => $news_update_image_name,
            'date' => $request->date,
            'details' => $request->details,
        ]);
        // return back with success message
        return to_route('admin.news-updates.index')->with('success', 'News update edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsUpdate $news_update)
    {
        $news_update->delete();

        return to_route('admin.news-updates.index')->with('warning', 'News update deleted successfully');
    }
}
