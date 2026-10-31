@extends('layouts.app')

@section('content')
<header class="page-heading"><div><p class="eyebrow">Accounts</p><h1>Users</h1><p>Staff accounts in the temporary Laravel data source.</p></div><span class="record-count">{{ count($users) }} records</span></header>
<section class="record-grid">
    @foreach ($users as $user)
        <article class="record-card"><div class="record-avatar">{{ strtoupper(substr($user['full_name'], 0, 1)) }}</div><div><h2>{{ $user['full_name'] }}</h2><p><strong>Username</strong><span>{{ $user['username'] }}</span></p><p><strong>Role</strong><span>{{ $user['role'] }}</span></p></div></article>
    @endforeach
</section>
@endsection
