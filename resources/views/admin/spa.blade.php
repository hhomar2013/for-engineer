@extends('layouts.admin1',['title'=>'SPA'])
{{--<script src="https://www.google.com/recaptcha/api.js" async defer></script>--}}
@section('content')
{{--    <div class="g-recaptcha" data-sitekey="6LdVRSEmAAAAAH2Fvvl9pYRgueYb4tZWXwwgrom3"></div>--}}
    @livewire('spa')
@endsection
