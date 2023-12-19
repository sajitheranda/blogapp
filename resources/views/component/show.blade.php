
<div class="row justify-content-center align-items-center">
    <div class="col-10 col-lg-4  postershow mt-5">
        <h4 class="p-3 postershow-title">{{$post->title}}</h4>
        <div class="row justify-content-center">
            <img src="{{ asset('images/'.$post->image) }}" class="img-fluid rounded col-10 m-3" alt="Image is not available">
        </div>
        <div  class="p-4 text-justify postershow-description">
            {{$post->description}}
        </div>
        <div class="row mt-2 text-center align-items-center jusify-content-center">
            <div class="col-12 col-lg-6  postershow mt-3">
                Posted date = {{date('d-F-Y', strtotime($post->created_at))}}
            </div>
            <div class="col-12 col-lg-6  postershow mt-1 mt-lg-3">
                Posted Id = {{$post->id}}
            </div>
        </div>
    </div>
    

</div>

