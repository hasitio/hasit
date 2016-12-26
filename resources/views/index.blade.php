@extends('layouts.master')
@section('title', 'hasit')

@section('content')
<div class="hasit">has <span class="typed"></span></div>
@endsection

@section('footer')
<script src="{{ URL::asset('js/typed.min.js') }}"></script>
<script>
  $(function(){
      $(".typed").typed({
        strings: ["nick told his dad joke today?", "the end of the world passed?", "this app been released yet?"],
        typeSpeed: 20,
        loop: true,
        backDelay: 4000,
      });
  });
</script>
@endsection
