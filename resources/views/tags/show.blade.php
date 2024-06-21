<x-main>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h2>{{ $tag->name }}</h2>
                <hr>
                <div class="col-12 d-flex mt-5">
                    @forelse ($tag->posts as $post)
                        <div class="card m-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $post->user->name }}</h6>
                                <p class="card-text">{{ $post->body }}</p>
                                @foreach ($post->tags as $tag)
                                    <a href="#" class="card-link">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
</x-main>
