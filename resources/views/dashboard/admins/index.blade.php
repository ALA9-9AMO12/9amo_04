@extends('layouts.dashboard')

@section('title')
    <h1 class="fs-2">Admins</h1>
@endsection

@section('description')
    <h3 class="mb-0 fs-6 fw-normal text-black-200">Manage all administrators</h3>
@endsection

@section('button')
    <a href="{{ route('dashboard.admins.create') }}" class="btn btn-warning">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card border-bottom-0 auto-overflow">
                <table class="table mb-0">
                    <thead class="card-header">
                        <tr class="bg-light">
                            <th>
                                <span class="fw-normal fs-7">Name</span>
                            </th>
                            <th>
                                <span class="fw-normal fs-7">Role</span>
                            </th>
                            <th>
                                <span class="fw-normal fs-7">Created At</span>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="bg-light">
                                <td class="align-middle">
                                    <h5 class="mb-0 fs-6">{{ $user->name }}</h5>
                                    <h5 class="mb-0 fs-7 fw-normal text-black-200">#{{ $user->id }}</h5>
                                </td>
                                <td class="align-middle">
                                    @switch($user->role_id)
                                        @case(2)
                                            <span class="fs-6 fw-normal text-black-200">Admin</span>
                                        @break

                                        @case(3)
                                            <span class="fs-6 fw-normal text-black-200">Head Admin</span>
                                        @break
                                    @endswitch
                                </td>
                                <td class="align-middle">
                                    <h5 class="mb-0 fs-6 fw-normal text-black-200">{{ date('d/m/Y', strtotime($user->created_at)) }}</h5>
                                </td>
                                <td class="align-middle">
                                    @if (Auth::id() != $user->id)
                                        <div class="d-flex justify-content-end">
                                            <button type="button"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('delete-admin-{{ $user->id }}').submit();"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="height: 1.5rem; width: 1.5rem;">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>

                                            <form id="delete-admin-{{ $user->id }}" action="{{ route('dashboard.admins.destroy', $user->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
