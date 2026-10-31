@extends('layouts.app')

@section('content')
<header class="page-heading"><div><p class="eyebrow">Accounts</p><h1>Customers</h1><p>Registered customers in the temporary Laravel data source.</p></div><span class="record-count">{{ count($customers) }} records</span></header>
<section class="record-grid">
    @foreach ($customers as $customer)
        <article class="record-card"><div class="record-avatar">{{ strtoupper(substr($customer['full_name'], 0, 1)) }}</div><div><h2>{{ $customer['full_name'] }}</h2><p><strong>Email</strong><span>{{ $customer['email'] }}</span></p><p><strong>Phone</strong><span>{{ $customer['phone'] }}</span></p></div></article>
    @endforeach
</section>
@endsection
