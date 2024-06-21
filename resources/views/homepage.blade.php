<x-main>

    <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Benvenuto Tizio</h1>
                <p class="col-md-8 fs-4">Qui puoi creare nuovi
                    libri, clicca sul pulsante in basso per
                    accedere alla sezione dedicata </p>
                <button class="btn btn-primary btn-lg" type="button">Nuovo Libro</button>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-4">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                    <h2>Amministra i Posts</h2>

                    <a href="{{ route('posts.index') }}"class="btn btn-outline-secondary" type="button">Vedi
                        Posts</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                    <h2>Gestione Tags</h2>

                    <a href="{{ route('tags.index') }}"class="btn btn-outline-secondary" type="button">Vedi
                        Tags</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 p-5  border rounded-3">
                    <h2>Gestione Utenti</h2>

                    <a href="{{ route('users.index') }}"class="btn btn-outline-secondary" type="button">Vedi
                        Utenti</a>
                </div>
            </div>
        </div>
    </div>

</x-main>
