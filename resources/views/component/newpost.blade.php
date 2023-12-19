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
    <h2 class="bg-warning p-2 text-center rounded" >New Post</h2>
    <form method="post" action="{{route('posts.save')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
            
            <label>Post title</label>
            <input type="title" name="title" class="form-control" id="title"  placeholder="Enter post title" required>
            
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Post Content</label>
            <textarea type="description" name="description"id="description" class="form-control" placeholder="Write post description" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Select post image</label>
            <input name="image" id="image" class="form-control"  type="file" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-2">Add Post</button>
        </div>
            
    </form>
</div>
</div>
</div>

