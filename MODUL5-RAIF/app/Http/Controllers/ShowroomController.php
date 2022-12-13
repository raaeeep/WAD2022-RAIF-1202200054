<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Showroom';
        $data['q'] = $request->get('q');
        $data['showrooms'] = Showroom::where('name', 'like', '%' . $data['q'] . '%')->get();
        return view('showroom.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Car';
        return view('showroom.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/assets/upload-img", $name);
            $save = DB::table('tb_showroom')->insert([
                'image' => $name,
                'name'=>$request->name,
                'owner'=>$request->owner,
                'brand'=>$request->brand,
                'purchase_date' => $request->purchase_date,
                'description'=>$request->description, 
                'status'=>$request->status]);
            return redirect('showroom')->with('success', 'Data Berhasil Ditambahkan!');
        }else{
            echo "Gagal upload Data";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $post = Showroom::findOrFail($id);
        return view('showroom.detail',['title' => 'Detail'], [
                'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Showroom::findOrFail($id);
        return view('showroom.update',['title' => 'Edit'], [
                'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Showroom $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'owner' => 'required',
            'brand' => 'required',
            'purchase_date' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,svg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/assets/upload-img/', $image->hasName());

            Storage::delete('public/foto/'. $id->image);

            $id->update([
                'image' => $image->hasName(),
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }else{
            $id->update([
                'name' => $request->nama,
                'description' => $request->description
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Showroom  $showroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showroom $id)
    {
        Storage::delete('public/assets/upload-img/'.$id->image);

        $id->delete();

        return redirect()->route('showroom.index')->with('success', 'Data Berhasil Dihapus!');;
    }
}
