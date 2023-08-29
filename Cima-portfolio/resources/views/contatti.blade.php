<x-main>
    <x-slot name='title'>Contatti</x-slot>
    <main>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container py-4">
            <form action="{{ route('mail') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input class="form-control" type="String" placeholder="Nome" name="nome" value="{{ old('nome') }}"
                         />
                </div>

                <!--  -->
                <div class="mb-3">
                    <label class="form-label">Telefono</label>
                    <input class="form-control" type="number" placeholder="Telefono" value="{{ old('tel') }}"
                        name="tel" />Telefono
                </div>
                <!--  -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" placeholder="Email" name="email"  />
                </div>
                <!-- -->
                <div class="mb-3">
                    <label class="form-label">Messaggio</label>
                    <textarea class="form-control" type="text" placeholder="Messaggio" name="msg"
                        value="{{ old('msg') }}"style="height: 10rem;" ></textarea>
                </div>

                <!--  -->
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Invia</button>
                </div>

            </form>

        </div>
    </main>
</x-main>

</html>
