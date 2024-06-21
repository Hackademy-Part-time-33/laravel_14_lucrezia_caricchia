<x-main>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 border rounded" action="{{ route('login') }}" method="POST">
                    @csrf


                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            utente</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                            id="email">
                        @error('email')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-dark">Login</button>
                    <a href="{{ route('register') }}" class="btn btn-outline-dark">Non sei registrato? Registrati!</a>
                </form>
            </div>
        </div>
    </div>
</x-main>
