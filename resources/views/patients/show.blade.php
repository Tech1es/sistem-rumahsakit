@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Patient Details
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $patient->name }}</p>
            <p><strong>Email:</strong> {{ $patient->email }}</p>
            <p><strong>Date of Birth:</strong> {{ $patient->date_of_birth }}</p>
            <p><strong>Address:</strong> {{ $patient->address }}</p>
            <p><strong>Phone Number:</strong> {{ $patient->phone_number }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back to Patients</a>
        </div>
    </div>
</div>
@endsection