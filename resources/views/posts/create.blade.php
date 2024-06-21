<x-main>

    <div class="px-4 px-md-5 mb-5 mt-5">
        <div class="row gx-5 justify-content-center ">
            <!-- BACK BUTTON -->
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('posts.index') }}" class="nav-link">
                    <i class="fa-solid fa-delete-left"></i>
                    Torna indietro
                </a>
                <h3 class="mx-auto">Crea il tuo Post</h3>
            </div>
            <!-- FORM CREATE -->
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value name="title" type="text">
                        <label for="title">Titolo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control p-5" id="body" name="body">{{ old('body') }}</textarea>
                        <label for="body">Testo Post</label>
                    </div>
                    <div class="form-control mb-3">
                        @forelse ($tags as $tag)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tags_id" name="tags[]"
                                    value="{{ $tag->id }}">
                                <label class="form-check-label" for="tags_id">{{ $tag->name }}</label>
                            </div>
                        @empty
                            Nessun tag disponibile
                        @endforelse
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
