<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Models\posts;
use Symfony\Component\HttpFoundation\Response;

class postsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }
     public function index()
    {
        return posts::all();
    }
 
    public function show(posts $posts)
    {
        return $posts;
    }

    public function store(Request $request)
    {


        $data =  request()->validate([
            'title' => 'required',
            'blog' => 'required',]);
        $posts = posts::create($data);

        return response()->json($posts, 201);
    }

    public function update(Request $request, posts $posts)
    {
        
        $posts->update($request->all());

        return response()->json($posts, 200);
    }

    public function delete(posts $posts)
    {
        $posts->delete();

        return response()->json("Post deleted successfully", 204);
    }//
}
