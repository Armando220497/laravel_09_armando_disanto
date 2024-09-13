<x-layout>
    <div class="container-fluid d-flex justify-content-center bodiImg">
        <div class="row justify-content-center text-center my-5">
            <div class="col-12">
                <h2 class="text-dark">Vuoi conoscere i nostri prodotti o hai bisogno di informazioni? Contattaci e saremo
                    felici di aiutarti!</h2>
            </div>

            <div class="col-6">
                <!-- Controlla se esiste un messaggio di successo -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <form class="shadow-lg" action="{{ route('sendMessage') }}" method="POST">
                    @csrf

                    <!-- Campo email -->
                    <div class="mb-3">
                        <label class="form-label text-light fw-bold">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                        <div class="form-text">Non condivideremo la tua email con nessuno.</div>
                    </div>

                    <!-- Campo numero di telefono -->
                    <div class="mb-3">
                        <label class="form-label text-light fw-bold">Phone Number</label>
                        <input type="text" name="number" class="form-control" id="number" required>
                        <div class="form-text">Non condivideremo il tuo numero con nessuno.</div>
                    </div>

                    <!-- Campo nome -->
                    <div class="mb-3">
                        <label class="form-label text-light fw-bold">Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>

                    <!-- Campo messaggio -->
                    <div class="mb-3">
                        <label class="form-label text-light fw-bold">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="4" placeholder="Inserisci il tuo messaggio"
                            required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
