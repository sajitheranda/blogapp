<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Postcontroller extends Controller
{
    //store
    public function store(Request $request){
        

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);
    
        if ($validator->fails()) {
            $notification = ['message' => 'Fill all required fields'];
        } else {
            $imageurl = time() . '.' . $request->image->Extension();
            $request->image->move(public_path('images'), $imageurl);

            $notification = ['message' => 'Post updated successfully'];
            Post::create([
                'user_id'=>auth()->user()->id,
                'title'=> $request->title,
                'description'=> $request->description,
                'image'=> $imageurl
            ]);
        }

        

        return redirect()->back()->with($notification);

        

        

        

    }

    public function show($postID){

        $post= Post::findOrFail($postID);
        //return view('post.show',compact('post'));

        if (!Auth::check()) {
            return view('post.show',compact('post'));
        } elseif (Auth::user()->role === 'admin') {
            return view('admin.show',compact('post'));
        } elseif (Auth::user()->role === 'user') {
            return view('user.show',compact('post'));
        }else{
            return back();
        }

    }


    public function myposts(){
        $posts = Post::where('user_id',Auth::user()->id)->get();


        //user is authorized
        if (Auth::user()->role === 'admin') {
            return view('admin.mypost',compact('posts')) ;
        } elseif(Auth::user()->role === 'user') {
            return view('user.mypost',compact('posts')) ;
        }else{
            return back();
        }


        
    }

    public function edit($postID){
        //$post = Post::findOrFail($postID);

        //return view('post.editpost',compact('post'));
        
        if (Auth::user()->role === 'admin') {
            $post=Post::where('id', $postID)->firstOrFail();
            return view('admin.editpost',compact('post'));
            
        } elseif(Auth::user()->role === 'user') {
            $post = Post::where('id', $postID)->where('user_id', Auth::user()->id)->firstOrFail();
            return view('user.editpost',compact('post'));
        }

        return back();

        // if (Auth::user()->role === 'admin') {
        //     return view('admin.editpost',compact('post'));
        // } elseif(Auth::user()->role === 'user') {
        //     return view('user.editpost',compact('post'));
        // }else{
        //     return back();
        // }
    }

    public function update(Request $request){
        
        $validator=Validator::make($request->all(),[
            'id' =>'required',
            'title' => 'required',
            'description' => 'required',
        ]);


        if ($validator->fails()){
            $notification =["message"=>"Fill all required fields"];
            
        }else{
            //$imageurl = time() . '.' . $request->image->Extension();
            //$request->image->move(public_path('images'), $imageurl);
             
            //Post::findOrFail($request->id)->update($request->all());
            // Post::findOrFail($request->id)->update([
            //     'title'=> $request->title,
            //     'description'=> $request->description,
            // ]);
            $notification =['message'=> "you can't change post"];

            if (Auth::user()->role === 'admin') {
                $post=Post::where('id', $request->id)->firstOrFail();
                $post->update([
                    'title'=> $request->title,
                    'description'=> $request->description,
                ]);
                $notification =["message"=>"Post has been deleted successfully."];
                
            } elseif(Auth::user()->role === 'user') {
                $post = Post::where('id', $request->id)->where('user_id', Auth::user()->id)->firstOrFail();
                $post->update([
                    'title'=> $request->title,
                    'description'=> $request->description,
                ]);
                $notification =["message"=>"Post has been deleted successfully."];
    
            }

            
            
        }

        
        
        //return redirect(route('posts.showall'))->with($notification);

        return redirect(route('posts.myposts'))->with($notification);

        // if (Auth::user()->role === 'admin') {
        //     return redirect(route('admin.mypost'))->with($notification);
        // } elseif(Auth::user()->role === 'user') {
        //     return redirect(route('user.mypost'))->with($notification);
        // }else{
        //     return back();
        // }
    }

    public function delete($postID){
        //Post::findOrFail($postID)->delete();
        $notification =["message"=>"You can't delete it."];

        
        if (Auth::user()->role === 'admin') {
            $post=Post::where('id', $postID)->firstOrFail();
            $post->delete();
            $notification =["message"=>"Post has been deleted successfully."];
            
        } elseif(Auth::user()->role === 'user') {
            $post = Post::where('id', $postID)->where('user_id', Auth::user()->id)->firstOrFail();
            $post->delete();
            $notification =["message"=>"Post has been deleted successfully."];

        }
        
        return redirect()->back()->with($notification);
    }


    public function updateimage(Request $request){
        
        $validator=Validator::make($request->all(),[
            'image' => 'required|image'
        ]);


        if ($validator->fails()){
            $notification =["message"=>"Fill all required fields"];
            
        }else{

            
            $imageurl = time() . '.' . $request->image->Extension();
            $request->image->move(public_path('images'), $imageurl);
            // Post::findOrFail($request->id)->update([
            //     'image'=> $imageurl
            // ]);
            $notification =['message'=> "you can't change post"];

            if (Auth::user()->role === 'admin') {
                $post=Post::where('id', $request->id)->firstOrFail();
                $post->update([
                    'image'=> $imageurl
                ]);
                $notification =["message"=>"Post has been deleted successfully."];
                
            } elseif(Auth::user()->role === 'user') {
                $post = Post::where('id', $request->id)->where('user_id', Auth::user()->id)->firstOrFail();
                $post->update([
                    'image'=> $imageurl
                ]);
                $notification =["message"=>"Post has been deleted successfully."];
    
            }
            
        }

        
        
        //return redirect(route('posts.showall'))->with($notification);

        return redirect(route('posts.myposts'))->with($notification);

        // if (Auth::user()->role === 'admin') {
        //     return redirect(route('admin.mypost'))->with($notification);
        // } elseif(Auth::user()->role === 'user') {
        //     return redirect(route('user.mypost'))->with($notification);
        // }else{
        //     return back();
        // }
    }

}

