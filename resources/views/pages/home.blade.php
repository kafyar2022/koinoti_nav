@extends('layouts.master')

@section('title')
  {{ __('Main | Koinoti Nav') }}
@endsection

@section('content')
  <main class="main-content">
    <div class="container">
      Home page
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/home.js') }}" type="module"></script>
@endsection
