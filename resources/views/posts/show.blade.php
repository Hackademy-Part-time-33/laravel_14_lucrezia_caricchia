<x-main>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <div>
                    <h5 class="bold">Titolo</h5>
                    <p>{{ $post->title }}</p>
                </div>
                <div>
                    <h5 class="bold">Contenuto</h5>
                    <p>{{ $post->body }}</p>
                </div>
                <div>
                    <h5 class="bold">Autore</h5>
                    <p>{{ $post->user->name }}</p>
                </div>
            </div>
            <div class="col-6 mt-5">
                <ul>
                    @forelse ($post->tags as $tag)
                        <li>
                            <p>{{ $tag->name }}</p>
                        </li>
                    @empty
                        <p>Nessun tag associato</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-main>
