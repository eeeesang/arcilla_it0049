@extends('layouts.app')

@section('content')
<header class="page-heading"><div><p class="eyebrow">Pink POS</p><h1>Laravel Dashboard</h1><p>Welcome to the four-page point-of-sale foundation.</p></div><span class="framework-badge">Laravel 12</span></header>

<section class="stat-grid" aria-label="Application summary">
    <article class="stat-card"><span>System status</span><strong>Ready</strong><p>The application is running.</p></article>
    <article class="stat-card"><span>Pages</span><strong>4</strong><p>Connected through named routes.</p></article>
    <article class="stat-card"><span>Customers</span><strong>{{ $customerCount }}</strong><p>Temporary static records.</p></article>
    <article class="stat-card"><span>Users</span><strong>{{ $userCount }}</strong><p>Temporary staff records.</p></article>
</section>

<section class="quick-section"><div><p class="eyebrow">Quick access</p><h2>Explore the application</h2></div><div class="quick-grid"><a href="{{ route('customers.index') }}"><strong>Customer Accounts</strong><span>View five customer records →</span></a><a href="{{ route('users.index') }}"><strong>User Accounts</strong><span>View five staff records →</span></a></div></section>
@endsection
