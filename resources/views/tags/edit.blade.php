<x-main>
    <div class="px-4 px-md-5 mb-5 mt-5">
        <div class="row gx-5 justify-content-center ">
            <!-- BACK BUTTON -->
            <div class="col-12 d-flex justify-content-center">
                <a href="{{ route('tags.index') }}" class="nav-link">
                    <i class="fa-solid fa-delete-left"></i>
                    Torna indietro
                </a>
                <h3 class="mx-auto">Crea nuovo TAG</h3>
            </div>
            <!-- FORM CREATE -->
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{ route('tags.update', compact('tag')) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" value="{{ $tag->name }}" name="name"
                            type="text">
                        <label for="name">Nome</label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>
