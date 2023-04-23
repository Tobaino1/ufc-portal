<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class NewstoryController extends Controller
{
    
    public function index()
    {
        $news = News::latest()->paginate(5);
    
        return view('news.index',compact('news'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }
 
    public function requestnews()
      { 
        $news = News::all();
        return view ('story', ['news' => $news]); 
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'headline' => 'required',
            'by_date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        News::create($input);
     
        return redirect()->route('news.index')
                        ->with('success','News content created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function show(News $News)
    {
        return view('news.show',compact('News'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function edit(News $News)
    {
        return view('news.edit',compact('News'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $News)
    {
        $request->validate([
            'headline' => 'required',
            'by_date' => 'required',
            'detail' => 'required',

        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $newsPicture = date('YmdHis') . "." . $picture->getClientOriginalExtension();
            $picture->move($destinationPath, $newsPicture);
            $input['picture'] = "$newsPicture";
        }else{
            unset($input['picture']);
        }
          
        $News->update($input);
    
        return redirect()->route('news.index')
                        ->with('success','Content of the News have been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $News)
    {
        $News->delete();
     
        return redirect()->route('news.index')
                        ->with('success','Content of the News was deleted successfully');
    }
}
