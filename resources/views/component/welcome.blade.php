<div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 p-3 p-sm-5 poster m-2">
                <h2 class="post-title">Blogify: Your Ultimate Blogging Companion</h2>
                <div  class="post-description">
                    Blogify is a powerful and user-friendly blogging application designed for writers, creators, and enthusiasts to share their thoughts, ideas, and stories with the world. With an intuitive interface and rich features, Blogify allows users to create, edit, and publish blog posts seamlessly.
                </div>

            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            {{-- <div class="col-10 col-lg-5 p-2  newposter m-2">
                <h4 class="newposter-title">Explore the Universe: A Cosmic Journey Through Time and Space</h4>
                <div  class="newposter-description mt-2 text-justify m-1">
                Embark on an awe-inspiring adventure through the vast expanse of the universe! 
                Join us for an exploration of celestial wonders, 
                from distant galaxies to mesmerizing nebulae. Discover the mysteries of space, 
                learn about cosmic phenomena, and delve into the secrets of the cosmos. 
                Prepare to be captivated by the beauty and grandeur of our universe in this unforgettable journey!
                </div>

            </div> --}}

            @foreach($posts as $post)
            <div class="col-10 col-lg-5 p-2  newposter m-2">
                <h4 class="newposter-title text-center">{{$post->title}}</h4>
                <div class="row justify-content-center">
                    <img src="{{ asset('images/'.$post->image) }}" class="img-fluid rounded col-10" alt="Post Image">
                </div>
                
                
                <div  class="newposter-description mt-2 text-justify m-1">
                    <span class="d-inline d-sm-none d-md-none d-lg-none">{{ mb_substr($post->description, 0, 30) }}...</span>
                    <span class="d-none d-sm-inline d-md-none d-lg-none">{{ mb_substr($post->description, 0, 80) }}...</span> 
                    <span class="d-none d-sm-none d-md-inline d-lg-none">{{ mb_substr($post->description, 0, 150) }}...</span> 
                    <span class="d-none d-sm-none d-md-none d-lg-inline">{{ mb_substr($post->description, 0, 250) }}...</span> 
                </div>
                <style>
                    a:hover {
                        text-decoration: underline;
                    }
                </style>
                <div>{{date('d-F-Y', strtotime($post->created_at))}}</div>
                <a href="{{route('posts.show', $post->id)}}" style="color:rgb(23, 47, 112)" ><div class="text-sendary">Continue reading ....</div></a>

            </div>

            @endforeach
        </div>

    </div>
</div>