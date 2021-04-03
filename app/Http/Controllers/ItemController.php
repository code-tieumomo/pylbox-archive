<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Models\Box;
use App\Models\Item;
use App\Models\Util;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boxes = Box::all();

        return view('add-new-item', [
            'boxes' => $boxes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        if ($request->image == 'null') {
            $default_image = Util::where('name', '=', 'default_image')->get();
            $request->image = $default_image[0]->value;
        }

        $item = Item::create([
            // 'title'       => $request->title,
            'box_id'      => $request->box_id,
            'image'       => $request->image,
            'source'      => $request->source,
            'source_link' => $request->source_link,
            'sumary'      => $request->sumary,
            'detail'      => $request->detail
        ]);

        $result = [
            'status' => 200,
            'id' => $item->id,
            'message' => 'New item added'
        ];

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        try {
            $item = Item::findOrFail($id);
            $relatedItems = Item::whereHas('box', function($query) use ($item) {
                return $query->where('id', '=', $item->box_id);
            })->where('id', '!=', $item->id)->orderBy('id', 'desc')->limit(3)->get();
            
            return view('detail', [
                'item'         => $item,
                'relatedItems' => $relatedItems
            ]);
        } catch(ModelNotFoundException $e) {

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
