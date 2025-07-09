<div id="reservationModal" class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2>Book Your Essaouira Adventure!</h2>
        <div class="reservation-form-container">
            {{-- Display validation errors if any (these will show inside the modal) --}}
            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Success message display --}}
            @if (session('success'))
                <div class="alert alert-success" style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 10px; margin-bottom: 20px; border: 1px solid transparent; border-radius: .25rem;">
                    {{ session('success') }}
                </div>
            @endif

            <form id="reservationForm" action="{{ route('reservations.store') }}" method="POST">
                @csrf {{-- Laravel CSRF token for security --}}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="telephone">Phone:</label>
                    <input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" placeholder="+212XXXXXXXXX" required>
                    @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="Nationality">Nationality:</label>
                    <input type="text" id="Nationality" name="Nationality" value="{{ old('Nationality') }}" required>
                    @error('Nationality') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label>Gender:</label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="M" {{ old('gender') == 'M' ? 'checked' : '' }} required> Male</label>
                        <label><input type="radio" name="gender" value="F" {{ old('gender') == 'F' ? 'checked' : '' }}> Female</label>
                    </div>
                    @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="nambre_of_people">Number of People:</label>
                    <input type="number" id="nambre_of_people" name="nambre_of_people" value="{{ old('nambre_of_people', 1) }}" min="1" required>
                    @error('nambre_of_people') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="date_heure_reservation">Date & Time of Reservation:</label>
                    <input type="datetime-local" id="date_heure_reservation" name="date_heure_reservation" value="{{ old('date_heure_reservation') }}" required>
                    @error('date_heure_reservation') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="type_animal">Type of Animal:</label>
                    <select id="type_animal" name="type_animal" required>
                        <option value="">Select an Animal</option>
                        <option value="camel" {{ old('type_animal') == 'camel' ? 'selected' : '' }}>Camel</option>
                        <option value="cheval" {{ old('type_animal') == 'cheval' ? 'selected' : '' }}>Horse (Cheval)</option>
                    </select>
                    @error('type_animal') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="num_hours">Number of Hours:</label>
                    <input type="number" id="num_hours" name="num_hours" value="{{ old('num_hours', 1) }}" min="1" required>
                    @error('num_hours') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="price-details">
                    <div>
                        <span>Price per Animal per Hour:</span>
                        <span id="prix_par_heure_display">€0.00</span>
                    </div>
                    <div>
                        <span>Estimated Total Price:</span>
                        <span id="prix_total_display" class="total-price">€0.00</span>
                        <input type="hidden" name="prix_total" id="prix_total_hidden" value="0.00">
                    </div>
                </div>

                <button type="submit" class="confirm-button">Confirm Reservation</button>
            </form>
        </div>
    </div>
</div>