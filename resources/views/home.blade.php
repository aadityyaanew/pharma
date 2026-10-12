@extends('layouts.app')

@section('title', 'Jay Ambe Life Care | Leading Pharmaceutical Company | Vadodara, Gujarat')
@section('meta_description', 'Jay Ambe Life Care - Committed to Health, Dedicated to Life. Under Managing Director Mr. Dev Patel, providing quality tablets, syrups, injectables, ointments, and PCD Pharma franchise opportunities from Karjan, Vadodara, Gujarat.')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')

    <!-- Our Medicines & Divisions -->
    @include('components.products', ['products' => $products])

    <!-- Managing Director Mr. Dev Patel Spotlight -->
    @include('components.director-spotlight')

    <!-- Why Choose Jay Ambe Life Care -->
    @include('components.quality-process')

    <!-- Direct Enquiry & Contact Form -->
    @include('components.enquiry-form')
@endsection
