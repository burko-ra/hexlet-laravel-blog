<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate();
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();
        var_dump($data);

        $article = new Article();
        $article->fill($data);
        $article->save();

        flash('Статья создана!')->success();

        return redirect()
            ->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        // $data = $this->validate($request, [
        //     'name' => 'required|unique:articles,name,' . $article->id,
        //     'body' => 'required|min:100'
        // ]);
        $data = $request->validated();

        $article->fill($data);
        $article->save();

        return redirect()
            ->route('articles.index');
    }
}
