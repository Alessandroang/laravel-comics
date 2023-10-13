@extends ('layouts.app')

@section('page-title', 'About')
    

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <section id="email-form">
                <h2>Problema Riscontrato</h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="problem-description">Descrizione del problema:</label>
                        <textarea class="form-control" id="problem-description" name="problem_description" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </section>
        </div>

       
    </div>
</div>


    </section>
@endsection