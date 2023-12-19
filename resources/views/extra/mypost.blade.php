<div>
    <div class="container mt-4 mb-6 ">

        <div class="row justify-content-center ">
            @if(Session::has('message'))
                <div class="col-6 alert alert-success text-center rounded">
                    {{session('message')}}
                </div>
            @endif
        </div>
        <h2 class="text-center mb-3 allpost">All User Posts</h2>
        <table class="table table-hover table-striped table-bordered ">
          <thead class="thread1">
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Description</th>
              <th >Edit</th>
              <th >Delete</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>
                    <span class="d-inline d-sm-none d-md-none d-lg-none">{{ mb_substr($post->title, 0, 30) }}...</span>
                    <span class="d-none d-sm-inline d-md-none d-lg-none">{{ mb_substr($post->title, 0, 80) }}...</span> 
                    <span class="d-none d-sm-none d-md-inline d-lg-none">{{ mb_substr($post->title, 0, 150) }}...</span> 
                    <span class="d-none d-sm-none d-md-none d-lg-inline">{{ mb_substr($post->title, 0, 250) }}...</span> 
                   
                </td>
                <td>
                    <span class="d-inline d-sm-none d-md-none d-lg-none">{{ mb_substr($post->description, 0, 30) }}...</span>
                    <span class="d-none d-sm-inline d-md-none d-lg-none">{{ mb_substr($post->description, 0, 80) }}...</span> 
                    <span class="d-none d-sm-none d-md-inline d-lg-none">{{ mb_substr($post->description, 0, 150) }}...</span> 
                    <span class="d-none d-sm-none d-md-none d-lg-inline">{{ mb_substr($post->description, 0, 250) }}...</span> 
                    {{-- <span class="d-none d-xl-inline d-lg-none">{{ mb_substr($post->description, 0, 200) }}</span>  --}}
                    {{-- <span class="d-none d-xl-none">{{ mb_substr($post->description, 0, 250) }}</span>  --}}
                </td>
                <td class="edit-th"><a href="{{route('posts.edit',$post->id)}}">Edit</a></td>
                {{-- <td class="delete-th"><a href="{{route('posts.delete',$post->id)}}">Delete</a></td> --}}
                <td class="delete-th"><a  href="{{route('posts.delete',$post->id)}}" data-toggle="modal" data-target="#exampleModal">Delete</a></td>
                
            </tr>
            @endforeach
            
           
          </tbody>
        </table>
      </div>

      @if($posts->isNotEmpty())
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center" role="document">
            <div class="modal-content">
                <div class="modal-header text-danger">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Post {{$post->id}} <span id="postId"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Title: <span id="postTitle">{{$post->title}}</span></p>
                    <p>If you delete the post, it can't be recovered.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a id="deletePostLink" class="btn btn-danger" role="button" style="color: aliceblue">Delete post</a>
                </div>
            </div>
        </div>
    </div>
    @endif
      
 
</div>
