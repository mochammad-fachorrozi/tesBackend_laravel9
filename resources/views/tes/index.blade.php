@extends('layouts.app')


@section('content')
 
<h1 class="text-center mb-5">Jawaban Tes Magang!</h1>

<div class="text-end">
    <p><a href="{{ url('/sql') }}">Jawaban sql</a></p>
</div>

<h4>8. Perulangan Menggunakan increment</h4>
<?php 
  $count = 5; 
  $arr = [1,2,3,4,5]
  
  ?>
  @for ($i = 0; $i < $count; $i++)
      {{ 'saya oji' . ',' }}
  @endfor

  <h4>9. Menampilkan Array</h4>
  {{ print_r($arr) }}

  <?php 
  $x = 0;
  $y = 1;
  $limit = 10;
   ?>
  <h4>10. Bilangan Fibonacci </h4>
  {{ $x . ' ,'}}
  {{ $y . ' ,'}}

  @for ($i = 0; $i < $limit; $i++)
    <?php  $z = $x + $y; ?>
      {{ $z . ' ,' }}
    <?php   $x = $y;
            $y = $z; ?>
  @endfor


  <?php
  $k = 100;
   ?>
  <h4>11. Kelipatan 4</h4>
  @for ($l = 1; $l <= $k; $l++)
      @if($lipat = $l % 4 == 0)
      {{ $l . ' ,'}}
      @endif
  @endfor

@endsection