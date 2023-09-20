@extends('Layout.Layout')
@section('Factory')
<br>
<br>
<div class="container">
<h3 class="text-center">Factories In Laravel</h3>
<hr>
<p class="text-center">
Factories are dummy data entered in database for testing purposes.
</p>
{{--
Factories are dummy data entered in database for testing purposes.
To create a new factory
php artisan make:factory UserFactory --model=User
To run a factory
php artisan tinker
factory('App\User',10)->create();
it will insert 10 dummy data in User model
--}}
</div>
@endsection