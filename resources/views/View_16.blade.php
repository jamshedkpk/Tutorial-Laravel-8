@extends('Layout.Layout')
@section('Eloquent ORM')
<br>
<br>
<div class="container">
<h3 class="text-center">Elopuent ORM In Laravel</h3>
<hr>
<center>
<p>
An ORM is a short syntax of laravel which is used to interact with database.
An ORM is an object-relational mapper, and Laravel has one that you will absolutely love! It is named "Eloquent," because it allows you to work with your database objects and relationships using an eloquent and expressive syntax.
For example, using an Eloquent model assumes that the table the model is representing has an id field. The id is the primary key for any record, and is used by most of Eloquent's methods.

Another thing that Eloquent correctly assumes is that your table name is the plural form of your model. For example, your User model will reference the users table. As this might not always be the standard for some, Laravel provides a way to override this: simply use the $table flag:

1
2
3
class User extends Eloquent {
    public static $table = 'my_users';
}
This will instruct Laravel not to use the convention and instead use the specified table.

Lastly, Laravel can also automate the creation and updating of timestamps for us. To do so, add a created_at and/or updated_at column in the table, and set the $timestamp flag in the model:

1
2
3
class User extends Eloquent {
    public static $timestamps = true;
}
Eloquent will see the flag, and automatically set the created_at field on creation, and update the updated_at field each time that a record is updated. Pretty cool, huh
</p>
</center>
</div>
@endsection