<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Usuari;
use Illuminate\Illuminate\Database\Eloquent;
use App\Http\Requests\PostRequest;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function construct__(){
        $this->middleware('auth',[
            'except'=>['index', 'show']
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::orderby('titol', 'asc')->paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('inicio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {

        $request->validate([
            'titulo' => 'required|min:5',
            'contenido' => 'required|min:50',
        ]);


        $post=new Post();
        $post->titol=$request->input('titol');
        $post->contingut=$request->input('contingut');
        $post->user_id = Usuari::get()->first()->id;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::findorfail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $request->validate([
        'titol' => 'required|min:5',
        'contingut' => 'required|min:50',
    ]);

    $post->titol = $request->input('titol');
    $post->contingut = $request->input('contingut');
    $post->save();

    return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::findorfail($id)->delete();
        $posts=Post::get();
        return view('posts.index', compact('posts'));
    }

    public function nuevoPrueba()
    {
        $post=new Post();
        $post->titol='La saga Arkham tendra otro juego';
        $post->contingut='Rocksteady va a sacar un nuevo juego de Batman Arkham en 2026';
        $post->save();
        return redirect()->route('posts.index');
    }

    public function editarPrueba($id)
    {
        $post=Post::findorfail($id);
        $post->titol='La saga Marvel tendra otro peli';
        $post->contingut='Saldra la nueva peli de Spiderman';
        $post->save();
        return redirect()->route('posts.index');
    }
}


