<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tags = Tag::paginate(5);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Tag::create($request->all());
//        $request->session()->flash('success', 'Kategoriya muvaffaqiyatli qo`shildi');
        return redirect()->route('tags.index')->with('success', 'Teg muvaffaqiyatli qo`shildi');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('admin.tags.edit', compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $tags = Tag::find($id);
//        Agar slugni update qilmoqchi bo`lsang
//        $category->slug = null;
        $tags->update($request->all());
        return redirect()->route('tags.index')->with('success', 'Teg muvaffaqiyatli tahrirlandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        if ($tag->posts->count()){
            return redirect()->route('tags.index')->with('error', 'Ushbu tegda post bor');
        }
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Teg muvaffaqiyatli o`chirildi');
    }
}
