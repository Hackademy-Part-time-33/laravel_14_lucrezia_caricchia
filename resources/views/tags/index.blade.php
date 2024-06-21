<x-main>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="container mt-5">
            <div class="align-middle gap-2 d-flex justify-content-between">
                <h3>Elenco TAG inseriti</h3>
                <form class="d-flex" role="search" action="#" method="POST">
                    <input class="form-control rounded-0 me-2" name="search" type="search" placeholder="Cerca Articolo"
                        aria-label="Search">
                </form>
                <a href="{{ route('tags.create') }}">
                    <button type="button" class="btn rounded-0 btn-outline-success me-md-2" data-bs-toggle="modal"
                        data-bs-target="#formModalArticle">
                        <i class="fa-solid fa-plus"></i>
                        Crea Nuovo Tag
                    </button>
                </a>
            </div>
            <table class="table border border-black mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tag</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tags as $tag)
                        <tr>
                            <th scope="row">#{{ $tag->id }}</th>
                            <td>{{ $tag->name }}</td>
                            <td>
                                <!-- Button -->
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                    <a href="{{ route('tags.show', compact('tag')) }}"
                                        class="btn btn-primary rounded-0 me-md-2">
                                        <i class="fa-solid fa-file"></i>
                                        Visualizza
                                    </a>
                                    <a href="{{ route('tags.edit', compact('tag')) }}"
                                        class="btn btn-warning rounded-0 me-md-2">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Modifica
                                    </a>
                                    <form action="{{ route('tags.destroy', compact('tag')) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger rounded-0 me-md-2">
                                            <i class="fa-solid fa-trash"></i>
                                            Elimina</button>

                                    </form>
                                </div>
                            </td>
                        </tr>


                    @empty
                        Nessun articolo trovato
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</x-main>
