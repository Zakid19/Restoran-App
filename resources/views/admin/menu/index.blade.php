<x-admin-layout>
    <x-slot name="header">
        {{ __('Menu') }}
    </x-slot>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menu List</h4>
                    <a href="{{ route('admin.menu.create') }}" type="button" class="btn me-2 btn-primary">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr class="text-center">
                                    <th style="width:10px;"><strong>NO</strong></th>
                                    <th><strong>IMAGE</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>PRICE</strong></th>
                                    <th><strong>DESCRIPTION</strong></th>
                                    <th class="text-center"><strong>ACTION</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $index => $menu)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="text-center">
                                        <img src="{{ Storage::url($menu->image) }}" class="img-fluid rounded" width="55%">
                                    </td>
                                    <td>{{ $menu->name }}</td>
                                    <td>{{ $menu->price }}</td>
                                    <td>{{ $menu->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-primary shadow btn-sm sharp me-1">Edit</a>
                                            <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="post">
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
