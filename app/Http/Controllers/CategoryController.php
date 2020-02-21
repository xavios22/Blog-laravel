<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Category $model)
	{	
		
		return view('categories.index', ['categories' => $model->paginate(10)]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$newcategorie = new Category;
		$newcategorie->name = $request->name;
		$newcategorie->save();

		return redirect()->route('categorie.index')->withStatus('test');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function show(Category $category)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Category $categorie)
	{	
		return view ('categories.edit', compact('categorie'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$categorie = Category::where('id',$id)->first();
		$categorie->name = $request->name;
		$categorie->update();

		return redirect()->route('categorie.index')->withStatus(__('Votre catégorie a été modifié'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Category $categorie)
	{
		$categorie->delete();

		return redirect()->route('categorie.index')->withstatus('Votre Catégorie a été supprimé');
	}
}
