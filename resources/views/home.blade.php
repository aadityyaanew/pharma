@extends('layouts.app')

@section('title', 'Jay Ambe Life Care | Leading Pharmaceutical & Healthcare Company | Vadodara, Gujarat')
@section('meta_description', 'Jay Ambe Life Care - Committed to Health, Dedicated to Life. Under Managing Director Mr. Dev Patel, delivering WHO-GMP certified tablets, syrups, injectables, ointments, and PCD Pharma franchise opportunities from Karjan, Vadodara, Gujarat.')

@section('content')
    <!-- Hero Section -->
    @include('components.hero')

    <!-- Managing Director Mr. Dev Patel Leadership Spotlight -->
    @include('components.director-spotlight')

    <!-- Therapeutic Formulations & Divisions -->
    @include('components.products', ['products' => $products])

    <!-- Solid Orals & Tablet Compression Deep Dive -->
    @include('components.packaged-water')

    <!-- Critical Care Parenterals & Hospital Formulations -->
    @include('components.alkaline-water')

    <!-- Commercial B2B Sectors & PCD Monopoly Franchise -->
    @include('components.b2b-sectors')

    <!-- 7-Stage Pharmaceutical Quality Assurance & WHO-GMP -->
    @include('components.quality-process')

    <!-- Commercial Desk & Franchise Enquiry Form -->
    @include('components.enquiry-form')
@endsection
