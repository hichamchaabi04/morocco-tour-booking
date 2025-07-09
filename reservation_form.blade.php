<!DOCTYPE html>
<html lang="fr">
<head>      <option value="France">France</option>
<option value="Maroc">Maroc</option>
<option value="États-Unis">États-Unis</option>
<option value="Royaume-Uni">Royaume-Uni</option>
<option value="Allemagne">Allemagne</option>
<option value="Espagne">Espagne</option>
<option value="Italie">Italie</option>
<option value="Canada">Canada</option>
<option value="Australie">Australie</option>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Réservation</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="page-header">
        <div class="container">
            <h1>Formulaire de Réservation</h1>
            <nav>
                <a href="{{ url('/') }}">Retour à l'accueil</a>
            </nav>
        </div>
    </header>

    <main class="container form-container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reservation.store') }}" method="POST" id="reservationForm">
          

            <div class="form-group">
                <label for="name">Nom Complet <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="form-group">
                <label for="nationality">Nationalité <span class="required">*</span></label>
                <select id="nationality" name="nationality" required>
                    <option value="">Sélectionnez votre nationalité</option>
                    @include('partials.countries_list') 
                </select>
            </div>

            <div class="form-group">
                <label>Genre <span class="required">*</span></label>
                <div class="radio-group">
                    <input type="radio" id="gender_man" name="gender" value="Homme" {{ old('gender') == 'Homme' ? 'checked' : '' }} required>
                    <label for="gender_man">Homme</label>
                    <input type="radio" id="gender_woman" name="gender" value="Femme" {{ old('gender') == 'Femme' ? 'checked' : '' }} required>
                    <label for="gender_woman">Femme</label>
                </div>
            </div>

            <div class="form-group">
                <label for="num_people">Nombre de Personnes <span class="required">*</span></label>
                <input type="number" id="num_people" name="num_people" min="1" value="{{ old('num_people', 1) }}" required>
            </div>

            <div class="form-group">
                <label for="reservation_date">Date de Réservation <span class="required">*</span></label>
                <input type="date" id="reservation_date" name="reservation_date" value="{{ old('reservation_date') }}" required>
            </div>

            <div class="form-group">
                <label>Type d'Animal <span class="required">*</span></label>
                <div class="radio-group">
                    <input type="radio" id="animal_camel" name="animal_type" value="camel" data-price="20" {{ old('animal_type') == 'camel' ? 'checked' : '' }} required>
                    <label for="animal_camel">Chameau (20€/heure)</label>
                    <input type="radio" id="animal_horse" name="animal_type" value="horse" data-price="15" {{ old('animal_type') == 'horse' ? 'checked' : '' }} required>
                    <label for="animal_horse">Cheval (15€/heure)</label>
                </div>
            </div>

            <div class="form-group">
                <label for="num_hours">Nombre d'Heures Réservées <span class="required">*</span></label>
                <input type="number" id="num_hours" name="num_hours" min="1" value="{{ old('num_hours', 1) }}" required>
            </div>

            <div class="form-group">
                <label for="animal_price">Prix par animal (par heure)</label>
                <input type="text" id="animal_price" value="0.00 €" readonly>
            </div>

            <div class="form-group total-price">
                <label for="total_price">Prix Total Estimé</label>
                <input type="text" id="total_price" value="0.00 €" readonly>
            </div>

            <button type="submit" class="btn-submit">Confirmer la Réservation</button>
        </form>
    </main>

    <script src="{{ asset('js/reservation.js') }}"></script>
</body>
</html>
