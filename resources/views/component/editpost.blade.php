<div class="container ">
<div class="row justify-content-center ">
    @if(Session::has('message'))
        <div class="col-6 alert alert-success text-center rounded">
            {{session('message')}}
        </div>
    @endif
</div>
<div class="row justify-content-center ">
   
    <div class="col-11 col-md-6 bg-secondary p-3 rounded">
    <h2 class="bg-warning p-2 text-center rounded" >Edit Post</h2>
    <form method="post" action="{{route('posts.update')}}" enctype="multipart/form-data">
        @csrf
        <input  name="id" class="form-control" id="id" type="hidden" value={{$post->id}}>
        <div class="form-group" >
            <label>Post title</label>
            <input type="title" name="title" class="form-control" id="title"  placeholder="Enter post title" value="{{$post->title}}" required>
            
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Post Content</label>
            <textarea type="description" name="description"id="description" class="form-control" placeholder="Write post description" rows="5" required>{{$post->description}}</textarea>
        </div>
        <div class="row justify-content-center">
            <img src="{{ asset('images/'.$post->image) }}" class="img-fluid rounded col-10" alt="Image is not available">
            <a href="" class="btn btn-success mt-2" data-toggle="modal" data-target="#imageModal" >change the image</a>
        </div>
        {{-- <div class="form-group">
            <label for="image">Change post image</label>
            <input name="image" id="image" class="form-control"  type="file">
        </div> --}}
        
        <div class="text-center">
            <div class="row">
                <div class="col-12 col-sm-6 ">
                    <button type="submit" class="btn btn-primary mt-2">Save Post</button>
                </div>
                <div class="col-12 col-sm-6 ">
                    <a type="button" class="btn btn-danger mt-2" href="{{route('posts.myposts')}}">Back</a>
                </div>
            </div>        
        </div>
            
    </form>
</div>
</div>



<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-center" role="document">
      <div class="modal-content">
        <div class="modal-header text-danger">
          <h5 class="modal-title" id="exampleModalLabel">Delete Post {{$post->id}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Title: {{$post->title}}  <span id="postTitle"></span></p>
          <div class="row justify-content-center">
            <img src="{{ asset('images/'.$post->image) }}" class="img-fluid rounded col-10" alt="Image is not available">
          </div>

          <form method="post" action="{{route('posts.editimage',$post->id)}}" enctype="multipart/form-data">
            @csrf
            <input  name="id" class="form-control" id="id" type="hidden" value={{$post->id}}>
        
            <div class="form-group">
                <label for="image">Change post image</label>
                <input name="image" id="image" class="form-control"  type="file" required>
            </div>
            
            <div class="text-center">
                <div class="row">
                    <div class="col-12 col-sm-6 ">
                        <button type="submit" class="btn btn-primary mt-2">Update Post</button>
                    </div>
                    <div class="col-12 col-sm-6 ">
                        <a type="button" class="btn btn-danger mt-2" data-dismiss="modal" href="{{route('posts.myposts')}}">Close</a>
                    </div>
                </div>        
            </div>
                
          </form>
        </div>
        
      </div>
    </div>
  </div>


</div>





