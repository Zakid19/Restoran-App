<x-admin-layout>
    <x-slot name="header">
        {{ __('Category') }}
    </x-slot>
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Category</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.category.update', $category->id) }}" method="post" class="form-valide-with-icon needs-validation" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="text-label form-label" for="name">Name</label>
                                <div class="input-group">
                                    <input type="text" id="name" name="name" class="form-control input-default " placeholder="" value="{{ old('name', $category->name) }}">
                                </div>
                                @error('name')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="image">Image</label>
                                <div class="input-group">
                                    <div class="div mb-2">
                                        <img src="{{ Storage::url($category->image) }}" alt="" class="img-fluid rounded" width="30%">
                                    </div>
                                    <input type="file" id="name" name="image" class="form-control form-file-input" placeholder="">
                                </div>
                                @error('image')
                                <div class="alert alert-danger alert-dismissible fade show mt-3">
									@include('layouts.alert-required')
								</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="description">Description</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="description" name="description" rows="4" id="comment" value="{{ old('description') }}">{{ $category->description }}</textarea>
                                </div>
                                @error('description')
                                    <div class="alert alert-danger alert-dismissible fade show mt-3">
                                        @include('layouts.alert-required')
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn me-2 btn-primary">Submit</button>
                            <a href="{{ route('admin.category.index') }}" type="button" class="btn me-2 btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
