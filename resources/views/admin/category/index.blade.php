<x-admin-layout>
    <x-slot name="header">
        {{ __('Category') }}
    </x-slot>
    <div class="row">
        <div class="col-lg-12">
            @include('layouts.alert')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Category List</h4>
                    <a href="{{ route('admin.category.create') }}" type="button" class="btn me-2 btn-primary">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr class="text-center">
                                    <th style="width:10px;"><strong>NO</strong></th>
                                    <th><strong>IMAGE</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>DESCRIPTION</strong></th>
                                    <th class="text-center"><strong>ACTION</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $index => $category)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url($category->image) }}" class="img-fluid rounded" width="55%">
                                    </td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary shadow btn-sm sharp me-1">Edit</a>
                                            <form action="{{ route('admin.category.destroy', $category->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
