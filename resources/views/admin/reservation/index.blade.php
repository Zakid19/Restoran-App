<x-admin-layout>
    <x-slot name="header">
        {{ __('Table') }}
    </x-slot>
    <div class="row">
        <div class="col-lg-12">
            @include('layouts.alert')
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table List</h4>
                    <a href="{{ route('admin.reservation.create') }}" type="button" class="btn me-2 btn-primary">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr class="text-center">
                                    <th style="width:10px;"><strong>#</strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>EMAIL</strong></th>
                                    <th><strong>DATE</strong></th>
                                    <th><strong>TABLE</strong></th>
                                    <th><strong>GUEST</strong></th>
                                    <th><strong>ACTION</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $index => $reservation)
                                <tr class="text-center">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $reservation->first_name }}</td>
                                    <td>{{ $reservation->email}}</td>
                                    <td>{{ $reservation->res_date }}</td>
                                    <td>{{ $reservation->table->name }}</td>
                                    <td>{{ $reservation->guest_number }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.reservation.edit', $reservation->id) }}" class="btn btn-primary shadow btn-sm sharp me-1">Edit</a>
                                            <form action="{{ route('admin.reservation.destroy', $reservation->id) }}" method="post">
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
