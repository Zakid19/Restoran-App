<x-admin-layout>
    <x-slot name="header">
        {{ __('Table') }}
    </x-slot>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table List</h4>
                    <a href="{{ route('admin.table.create') }}" type="button" class="btn me-2 btn-primary">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr class="text-center">
                                    <th style="width:10px;"><strong>#</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>GUEST NUMBER</strong></th>
                                    <th><strong>STATUS</strong></th>
                                    <th><strong>LOCATION</strong></th>
                                    <th><strong>ACTION</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tables as $index => $table)
                                <tr class="text-center">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $table->name }}</td>
                                    <td>{{ $table->guest_number }}</td>
                                    <td>{{ $table->status }}</td>
                                    <td>{{ $table->location }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('admin.table.edit', $table->id) }}" class="btn btn-primary shadow btn-sm sharp me-1">Edit</a>
                                            <form action="{{ route('admin.table.destroy', $table->id) }}" method="post">
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
