<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\Api\V1\BlogRequest;

class BlogController extends Controller
{
    //
    public function index(){
        //
        $blogs = Blog::all();
        return response()->json($blogs, 200);
    }
    //
    public function store(BlogRequest $request){
        //
        /*Blog::create([
            'image' => $request->image,
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id
        ]);*/
        //
        $blog = new Blog();
        $blog->image = $request->image;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author_id = $request->author_id;
        $blog->save();
        //
        return response()->json(["message" => "created and stored"], 201);
    }
    //
    public function update(BlogRequest $request, $id){
        //
        $blog = Blog::findorFail($id);
        $blog->image = $request->image;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author_id = $request->author_id;
        $blog->save();
        //
        return response()->json(["message" => "edited and updated"], 200);
    }
    //
    public function show($id){
        //
        $blog = Blog::findorFail($id);
        //
        return response()->json([
            "data" => $blog,
            "message" => "Single Blog Fetched Successfully!",
            "status" => 200
        ], 200);
    }
    //
    public function destroy($id){
        //
        $blog = Blog::findorFail($id);
        //
        return response()->json([
            "message" => "Blog Deleted Successfully!",
            "status" => 200
        ], 200);
    }
    //
    public function search(Request $request){
        //
        if($request->has('q')){
            //
            $blogs = Blog::where('title', 'like', '%'.$request->q.'%')->get();
            //
            return response()->json([
                "data" => $blogs,
                "message" => "Blogs Searched Successfully!",
                "status" => 200
            ]);
        }else{
            return response()->json([
                "message" => "Blogs Don't Exists!"
            ]);
        }
    }
}
