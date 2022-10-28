<x-admin-layout>
    <x-slot name="header">
        {{ __('Edit Reservation') }}
    </x-slot>
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Reservation</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.reservation.update', $reservation->id) }}" method="post" class="form-valide-with-icon needs-validation" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="text-label form-label" for="first_name">Fisrt Name</label>
                                <div class="input-group">
                                    <input type="text" id="first_name" name="first_name" class="form-control input-default " placeholder="" value="{{ old('first_name', $reservation->first_name) }}">
                                </div>
                                @error('first_name')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="lats_name">Last Name</label>
                                <div class="input-group">
                                    <input type="text" id="last_name" name="last_name" class="form-control input-default " placeholder="" value="{{ old('last_name', $reservation->last_name) }}">
                                </div>
                                @error('last_name')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="email">Email</label>
                                <div class="input-group">
                                    <input type="email" id="email" name="email" class="form-control input-default " placeholder="" value="{{ old('email', $reservation->email) }}">
                                </div>
                                @error('email')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="tel_number">Phone Number</label>
                                <div class="input-group">
                                    <input type="text" id="tel_number" name="tel_number" class="form-control input-default " placeholder="" value="{{ old('tel_number', $reservation->tel_number) }}">
                                </div>
                                @error('tel_number')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="name">Res Date</label>
                                <div class="input-group">
                                    <input type="datetime-local" id="res_date" name="res_date" class="form-control input-default " placeholder="" value="{{ old('res_date', $reservation->res_date) }}">
                                </div>
                                @error('res_date')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="price">guest_number</label>
                                <div class="input-group">
                                    <input type="text" id="guest_number" name="guest_number" class="form-control input-default " placeholder="" value="{{ old('guest_number', $reservation->guest_number) }}">
                                </div>
                                @error('price')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="name">Table</label>
                                <div class="input-group">
                                    <select multiple name="table_id" id="table_id" class="default-select form-control wide mb-5 mt-3" tabindex="null">
                                        @foreach($tables as $table)
                                            <option {{ $table->id == $reservation->table_id ? "selected" : '' }} value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guest)</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('location')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn me-2 btn-primary">Submit</button>
                            <a href="{{ route('admin.reservation.index') }}" type="button" class="btn me-2 btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
