<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Mail\Attachment;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.menu.index', [
            'menus' => Menu::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $image = $request->file('image')->store('public/menu');

        $menu = Menu::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image,
        ]);

        if ($request->has('categories')) {
            $menu->categories()->attach($request->categories);
        }

        return redirect('admin/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menu.edit', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => ['required'],
            'price' => ['integer'],
            'description' => ['required'],
        ]);

        $image = $menu->image;
        if ($request->hasFile('image')) {
            Storage::delete($menu->image);
            $image = $request->file('image')->store('public/menu');
        }

        $menu->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image,
        ]);

        if ($request->has('categories')) {
            $menu->categories()->sync($request->categories);
        }

        return redirect('admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image);
        $menu->categories()->detach();
        $menu->delete();
        return back();
    }
}
