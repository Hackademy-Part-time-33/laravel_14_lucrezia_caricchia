<x-main>
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{ route('books.update', ['book' => $book]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value="{{ $book->title }}" name="title"
                            type="text">
                        <label for="title">Book Title</label>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="pages" value="{{ $book->pages }}" name="pages"
                            type="text">
                        <label for="pages">Pages</label>
                        @error('pages')
                            {{ $message }}
                        @enderror

                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="year" value="{{ $book->year }}" name="year"
                            type="text">
                        <label for="year">Release year</label>
                        @error('year')
                            {{ $message }}
                        @enderror

                    </div>

                    <div class="form-floating mb-3">
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="categories[]"
                                    @checked($book->categories->contains($category->id)) value="{{ $category->id }}">

                                <label class="form-check-label" for="category_id">{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-floating mb-3">
                        <img width="200" src="{{ Storage::url($book->image) }}" class="img-responsive">
                        <input class="form-control" id="image" name="image" value type="file">
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Modifica</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</x-main>
