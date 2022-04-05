@extends('main-layout.main-layout')
@section('content')
<h1>I am index page</h1>
@endsection
@section('scripts')
<script>
  $(document).ready(function(){
    console.log('jquery is working')
  });
</script>
@endsection