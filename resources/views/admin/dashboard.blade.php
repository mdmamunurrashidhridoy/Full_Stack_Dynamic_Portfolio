@extends('admin.overview')

@section('main-content')

<div class="main">
        <div class="header">Welcome to Your Dashboard 💻</div>

        <div class="card">
            <h3>Profile Summary</h3>
            <p>Name: {{ $user->name }}<br>Email: {{ $user->email }}</p>
        </div>

        <div class="card">
            <h3>Recent Stats</h3>
            <p>Visitors Today: 524<br>Conversions: 36</p>
        </div>

        <p class="quote">"Simplicity is the consequence of refined emotions." — Jean D'Alembert</p>

@endsection