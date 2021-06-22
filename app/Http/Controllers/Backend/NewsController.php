<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $active_news = "active";
        $title = "Admin - News";
        $all_news = News::latest()->paginate(5);
        return view('backend.news.index')
                ->with('active_news', $active_news)
                ->with('title', $title)
                ->with('all_news', $all_news);
    }

    public function show($id)
    {
      $active_news = "active";
      $news = news::findOrFail($id);
      return view('backend.news.show')
              ->with('news', $news)
              ->with('active_news', $active_news);
    }

    public function create()
    {
      $active_news = "active";

      return view('backend.news.create')
              ->with('active_news', $active_news);
    }

    public function store(CreateNewsRequest $request)
    {
        $news = new News;

        $input = $request->only(['news_title', 'news_description']);
        // dd($input);
        $input['news_description'] = preg_replace('/<span[^>]+\>/i', '', $input['news_description']);

        $image = $request->file('news_image');
        // dd($image);
      
        if($image) {
            $input['news_image'] = uploadImage($image, 870, 382);
        }
        
        $news = $news->create($input);

        if($news) {
           session()->flash('success', 'News added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.news');
        
    }

    public function edit($id)
    {
      $active_news = 'active';
      $news = News::findOrFail($id);
      return view('backend.news.create')
            ->with('news', $news)
              ->with('active_news', $active_news);

    }

    public function update(UpdateNewsRequest $request, $id)
    {
        $news = news::findOrFail($id);

        $input = $request->only(['news_title', 'news_description']);
        $input['news_description'] = preg_replace('/<span[^>]+\>/i', '', $input['news_description']);
        // dd($test);
        $image = $request->file('news_image');
        
        $input['news_image'] = updateNewImageOrKeepOld($image, $news->news_image, 870, 382);
        // dd($input['news_image']);
        $result = $news->update($input);

        if($result) {
             session()->flash('success', 'News Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.news');
    }

    public function destroy($id)
    {
      $news = News::findOrFail($id);
      $result = $news->delete();
      
      if($result) {
             session()->flash('success', 'News deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.news');
    }

}
