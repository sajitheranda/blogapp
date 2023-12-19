<div>
  <div class="container mt-4 mb-6 ">

      <div class="row justify-content-center ">
          @if(Session::has('message'))
              <div class="col-6 alert alert-success text-center rounded">
                  {{session('message')}}
              </div>
          @endif
      </div>
      <h2 class="text-center mb-3 allpost">My Posts</h2>
      <table class="table table-hover table-striped table-bordered" id="datatable">
        <thead class="thread1">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>
              <span class="">{{ mb_substr($post->title, 0, 30) }}...</span>
            </td>
            <td>
              <span class="d-inline d-sm-none d-md-none d-lg-none">{{ mb_substr($post->description, 0, 30) }}...</span>
              <span class="d-none d-sm-inline d-md-none d-lg-none">{{ mb_substr($post->description, 0, 80) }}...</span> 
              <span class="d-none d-sm-none d-md-inline d-lg-none">{{ mb_substr($post->description, 0, 200) }}...</span> 
              <span class="d-none d-sm-none d-md-none d-lg-inline">{{ mb_substr($post->description, 0, 350) }}...</span> 
            </td>
            <td class="edit-th"><a href="{{route('posts.edit',$post->id)}}">Edit</a></td>
            <td class="delete-th delete"><a href="#" data-toggle="modal" data-target="#exampleModal">Delete</a></td>
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
              <h5 class="modal-title" id="exampleModalLabel">Delete Post <span id="postId"></span></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Title: <span id="postTitle"></span></p>
              <p>If you delete the post, it can't be recovered.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" href="">Close</button>
              <a id="deletePostLink" class="btn btn-danger" role="button" style="color: aliceblue">Delete post</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Include jQuery and Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
      <script>
        // When the "Delete" link is clicked
        $('.delete').on('click', function(e) {
          e.preventDefault();
      
          // Get the post details from the table row
          var row = $(this).closest('tr');
          var postId = row.find('td:eq(0)').text(); // Assuming the ID is in the first column
          var postTitle = row.find('td:eq(1)').text(); // Assuming the title is in the second column
      
          // Set the post details in the modal
          $('#postId').text(postId);
          $('#postTitle').text(postTitle);
      
          // Update the delete link to include the post ID in the href attribute
          var deleteLink = "{{ route('posts.delete', ':postId') }}"; // Replace with your delete route
          deleteLink = deleteLink.replace(':postId', postId);
          $('#deletePostLink').attr('href', deleteLink);
      
          // Show the modal
          $('#exampleModal').modal('show');
        });

        $('#exampleModal').on('hidden.bs.modal', function (e) {
            $('.modal-backdrop').remove(); // Remove the overlay element
        });
      </script>
      @endif

  
    

</div>
