@extends('layouts.dashboard')

@section('title')
    <h1 class="fs-2">Dashboard</h1>
@endsection

@section('description')
    <h3 class="mb-0 fs-6 fw-normal text-black-200">Manage different parts of IVOG</h3>
@endsection

@section('content')
    <div class="row">
        @can('is-head-admin')
            <div class="col-12 col-sm-4 col-lg-3 mb-3">
                <a href="{{ route('dashboard.admins.index') }}" class="d-flex bg-light py-5 justify-content-center align-items-center flex-column text-black-100 text-decoration-none rounded-3 border">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="height: 2.5rem; width: 2.5rem;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>

                    <span class="mt-1">Admins</span>
                </a>
            </div>
        @endcan
        <div class="col-12 col-sm-4 col-lg-3 mb-3">
            <a href="#" class="d-flex bg-light py-5 justify-content-center align-items-center flex-column text-black-100 text-decoration-none rounded-3 border">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="height: 2.5rem; width: 2.5rem;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                </svg>

                <span class="mt-1">Placeholder</span>
            </a>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 mb-3">
            <a href="#" class="d-flex bg-light py-5 justify-content-center align-items-center flex-column text-black-100 text-decoration-none rounded-3 border">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="height: 2.5rem; width: 2.5rem;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                </svg>

                <span class="mt-1">Placeholder</span>
            </a>
        </div>
        <div class="col-12 col-sm-4 col-lg-3">
            <a href="#" class="d-flex bg-light py-5 justify-content-center align-items-center flex-column text-black-100 text-decoration-none rounded-3 border">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="height: 2.5rem; width: 2.5rem;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                </svg>

                <span class="mt-1">Placeholder</span>
            </a>
        </div>
    </div>
@endsection
