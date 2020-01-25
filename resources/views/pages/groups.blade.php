@extends('layouts.app')
@extends('layouts.nav')
@section('headers')
<title>Group Testing</title>
@endsection

@section('content')
<div class="container">
    <?php
      $students = App\Students::all();
      foreach ($students as $student) {
        echo $student->id;
      }
    ?>
</div>
@endsection