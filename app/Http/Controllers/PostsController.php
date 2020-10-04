<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use App\Post;
use App\User;
class PostsController extends Controller
{
    //this auth middleware will be used for all functions of postController
    public function __construct()
    {
    	$this->middleware("auth");
    }
    public function create()
    {
    	return view("posts.create");
    }
    public function index()
    {
        //return 'posts index';
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id',$users)->latest()->paginate(5);
        return view('posts.index',compact('posts'));
    }
    public function store(Request $request)
    {
    	//dd($request->all());
    	//multiple validations can also be called with pip sign or ['required','image']
    	$post = $request->validate(['caption'=>'required', 'image'=>'required|image']);
  


    	// below method will not work due to integrity constraint as user -> post 1:M relationship
    	/* $post = App\Post();
    	$post->caption = $request->caption;
    	$post->image = $request->image; */



    	// we don't want to save file name into database but the exact path of the file to get it back
    	// so the given will not be used..
    	// $post = $request->all();
    	// if(Auth::check())
    	// {
    	// 	auth()->user()->posts()->create($post);
    	// }
    	// else
    	// 	echo "login firt to post";


    	//$filePath = $request->file('image')->store('uploads','public');
        $filePath = $request->file('image')->storePublicly('uploads', 'public');
        //$image = Image::make(public_path("storage/{{$filePath}}"))->fit(1200,1200);
        //dd($image);
        //$image->save();


    	auth()->user()->posts()->create([
    		'caption' => $request['caption'],
    		'image' => $filePath,
    	]);

        return redirect('/profile/'.auth()->user()->id);


    	


    }
}
