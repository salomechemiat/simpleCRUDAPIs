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
      // dd("hellow world");
        return posts::all();
    }
 
    public function show(posts $posts)
    {
        return $posts;
    }

    public function store(Request $request)
    {

       $userid = $request['user_id']= \Auth::id();
       // dd($request);

        $data =  request()->validate([
            'title' => 'required',
            'blog' => 'required',

        ]);
        
        $post = posts::create($request->all());

        return response()->json($post, 201);
    }

    public function update(Request $request, posts $posts)
    {
        
        $posts->update($request->all());

        return response()->json($posts, 200);
    }

    public function delete(posts $posts)
    {
        $posts->delete();

        return response()->json($posts, 204);
    }//
}
