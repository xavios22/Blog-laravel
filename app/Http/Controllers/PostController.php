<?php

namespace App\Http\Controllers;
use App\Post;
Use App\Category;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $model)
    {       

        return view('posts.index', ['posts' => $model->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        
        return view('posts.create', compact(('categories')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newpost = new Post;
        $newpost->title = $request->title;
        $newpost->contenu = $request->contenu;
        $newpost->save();

        // Attach category at the post

        $categorie = Category::find($request->categorie_id);
        $newpost->categories()->attach($request->categorie_id);

        return redirect()->route('post.index')->withStatus(__('Votre post a été crée veuillez le valider'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $categories = Category::all();

        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->title = $request->title;
        $post->contenu = $request->contenu;
        // Dectah Categories

        $categories = Category::all();
        $post->categories()->detach($categories);
        // Attach Categories updated
        
        $categorie = Category::find($request->categorie_id);
        $post->categories()->attach($request->categorie_id);

        
        $post->update();

        return redirect()->route('post.index')->withStatus(__('Votre post a été modifié'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('post.index')->withStatus(__('Votre post a été supprimé'));
    }
}