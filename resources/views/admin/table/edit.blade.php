<x-admin-layout>
    <x-slot name="header">
        {{ __('Edit Table') }}
    </x-slot>
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Table</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.table.update', $table->id) }}" method="post" class="form-valide-with-icon needs-validation" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="text-label form-label" for="name">Name</label>
                                <div class="input-group">
                                    <input type="text" id="name" name="name" class="form-control input-default " placeholder="" value="{{ old('name', $table->name) }}">
                                </div>
                                @error('name')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="price">guest_number</label>
                                <div class="input-group">
                                    <input type="text" id="guest_number" name="guest_number" class="form-control input-default " placeholder="" value="{{ old('guest_number', $table->guest_number) }}">
                                </div>
                                @error('price')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="name">Status</label>
                                <div class="input-group">
                                    <select multiple name="status" id="status" class="default-select form-control wide mt-3" tabindex="null">
                                        @foreach(App\Enums\TableStatus::cases() as $status)
                                            <option @selected($table->status->value == $status->value) value="{{ $status->value }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('status')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="name">Location</label>
                                <div class="input-group">
                                    <select multiple name="location" id="location" class="default-select form-control wide mb-5 mt-3" tabindex="null">
                                        @foreach(App\Enums\TableLocation::cases() as $location)
                                            <option @selected($table->location->value == $location->value) value="{{ $location->value }}">{{ $location->name }}</option>
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
                            <a href="{{ route('admin.table.index') }}" type="button" class="btn me-2 btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
