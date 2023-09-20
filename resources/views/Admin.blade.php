@extends('Layout.Layout')
@section('Admin')
<center>
<h3>
Welcome To Laravel 8 Tutorials
</h3>
<hr>
<br>
</center>
<div class="container">
<table class="table table-bordered table-hover table-striped">
<tr>
<th>
S.No
</th>
<th>
Route Name
</th>
<th>
Controller Name	
</th>
<th>
Example Name	
</th>
</tr>
<tr>
<td>1</td>
<td>Controller1</td>
<td>Controller_1</td>
<td>
<a href="{{route('controller1')}}">
Introduction To MVC
</a>
</td>
</tr>
<tr>
<td>2</td>
<td>Controller2</td>
<td>Controller_2</td>
<td>
<a href="{{route('controller2')}}">
Routing	
</a>
</td>
</tr>
<tr>
<td>3</td>
<td>Controller3</td>
<td>Controller_3</td>
<td>
<a href="{{route('controller3')}}">
Controller	
</a>
</td>
</tr>
<tr>
<td>4</td>
<td>Controller4</td>
<td>Controller_4</td>
<td>
<a href="{{route('controller4')}}">
View	
</a>
</td>
</tr>
<tr>
<td>5</td>
<td>Controller5</td>
<td>Controller_5</td>
<td>
<a href="{{route('controller5')}}">
Components	
</a>
</td>
</tr>
<tr>
<td>6</td>
<td>Controller6</td>
<td>Controller_6</td>
<td>
<a href="{{route('controller6')}}">
Blade Template	
</a>
</td>
</tr>
<tr>
<td>7</td>
<td>Controller7</td>
<td>Controller_7</td>
<td>
<a href="{{route('controller7')}}">
Tamplate Inheritance	
</a>
</td>
</tr>
<tr>
<td>8</td>
<td>Controller8</td>
<td>Controller_8</td>
<td>
<a href="{{route('controller8.index')}}">
Resource Controller	
</a>
</td>
</tr>
<tr>
<td>9</td>
<td>Controller9</td>
<td>Controller_9</td>
<td>
<a href="{{route('controller9.index')}}">
Submit A Form	
</a>
</td>
</tr>
<tr>
<td>10</td>
<td>Controller10</td>
<td>Controller_10</td>
<td>
<a href="{{route('controller10.index')}}">
Request Properties	
</a>
</td>
</tr>
<tr>
<td>
11
</td>
<td>
Controller11	
</td>
<td>
Controller_11
</td>
<td>
<a href="{{route('controller11.index')}}">
Form Validation	
</a>
</td>
</tr>
<tr>
<td>
12	
</td>
<td>Controller12</td>
<td>Controller_12</td>
<td>
<a href="{{route('controller12.index')}}">
CRUD Operation Using Raw SQL Query
</a>
</td>
</tr>
<tr>
<td>13</td>
<td>Controller13</td>
<td>Controller_13</td>
<td><a href="{{route('controller13.index')}}">
CRUD Operation Using Query Builder
</a></td>
</tr>
<tr>
<td>14</td>
<td>Controller14</td>
<td>Controller_14</td>
<td><a href="{{route('controller14.index')}}">
Migrations
</a></td>
</tr>
<tr>
<td>15</td>
<td>Controller15</td>
<td>Controller_15</td>
<td><a href="{{route('controller15.index')}}">
Factory
</a></td>
</tr>
<tr>
<td>16</td>
<td>Controller16</td>
<td>Controller_16</td>
<td><a href="{{route('controller16.index')}}">
Eloquent ORM
</a></td>
</tr>
<tr>
<td>17</td>
<td>Controller17</td>
<td>Controller_17</td>
<td><a href="{{route('controller17.index')}}">
CRUD Operations Using ORM
</a></td>
</tr>
<tr>
<td>18</td>
<td>Controller18</td>
<td>Controller_18</td>
<td><a href="{{route('controller18.index')}}">
MiddleWare
</a></td>
</tr>
<tr>
<td>19</td>
<td>Controller19</td>
<td>Controller_19</td>
<td><a href="{{route('controller19')}}">
Global Middleware
</a></td>
</tr>
<tr>
<td>20</td>
<td>Controller20</td>
<td>Controller_20</td>
<td><a href="{{route('controller20')}}">
Group Middleware
</a></td>
</tr>
<tr>
<td>21</td>
<td>Controller21</td>
<td>Controller_21</td>
<td><a href="{{route('controller21')}}">
Routed Middleware
</a></td>
</tr>
<tr>
<td>22</td>
<td>Controller22</td>
<td>Controller_22</td>
<td><a href="{{route('controller22')}}">
Http Client For API
</a></td>
</tr>
<tr>
<td>23</td>
<td>Controller23</td>
<td>Controller_23</td>
<td><a href="{{route('controller23.index')}}">
Start A Session
</a>
</td>
</tr>
<tr>
<td>24</td>
<td>Controller24</td>
<td>Controller_24</td>
<td><a href="{{route('controller24.index')}}">
Terminate A Session
</a>
</td>
</tr>
<tr>
<td>25</td>
<td>Controller25</td>
<td>Controller_25</td>
<td><a href="{{route('controller25.index')}}">
Password Hash Technique
</a>
</td>
</tr>
<tr>
<td>26</td>
<td>Controller26</td>
<td>Controller_26</td>
<td><a href="{{route('controller26.index')}}">
Flash Session
</a>
</td>
</tr>
<tr>
<td>27</td>
<td>Controller27</td>
<td>Controller_27</td>
<td><a href="{{route('controller27.index')}}">
Upload File
</a>
</td>
</tr>
<tr>
<td>28</td>
<td>Controller28</td>
<td>Controller_28</td>
<td><a href="{{route('controller28.index')}}">
Pagination
</a>
</td>
</tr>
<tr>
<td>29</td>
<td>Controller29</td>
<td>Controller_29</td>
<td><a href="{{route('controller29')}}">
Signin
</a>
</td>
</tr>
<tr>
<td>30</td>
<td>Controller30</td>
<td>Controller_30</td>
<td><a href="{{route('controller30')}}">
Signout
</a>
</td>
</tr>
<tr>
<td>31</td>
<td>Controller31</td>
<td>Controller_31</td>
<td><a href="{{route('controller31')}}">
Accessors
</a>
</td>
</tr>
<tr>
<td>32</td>
<td>Controller32</td>
<td>Controller_32</td>
<td><a href="{{route('controller32')}}">
Mutators
</a>
</td>
</tr>
<tr>
<td>33</td>
<td>Controller33</td>
<td>Controller_33</td>
<td><a href="{{route('controller33.index')}}">
One To One Relationship
</a>
</td>
</tr>
<tr>
<td>34</td>
<td>Controller34</td>
<td>Controller_34</td>
<td><a href="{{route('controller34.index')}}">
One To Many Relationship
</a>
</td>
</tr>
<tr>
<td>35</td>
<td>Controller35</td>
<td>Controller_35</td>
<td><a href="{{route('controller35.index')}}">
Many To Many Relationship
</a>
</td>
</tr>
<tr>
<td>36</td>
<td>Controller36</td>
<td>Controller_36</td>
<td><a href="{{route('controller36.index')}}">
Stubs
</a>
</td>
</tr>
<tr>
<td>37</td>
<td>Controller37</td>
<td>Controller_37</td>
<td><a href="{{route('controller37.index')}}">
Route Model Binding
</a>
</td>
</tr>
<tr>
<td>38</td>
<td>Controller38</td>
<td>Controller_38</td>
<td><a href="{{route('controller38.index')}}">
Ajax Request
</a>
</td>
</tr>
<tr>
<td>39</td>
<td>Controller39</td>
<td>Controller_39</td>
<td><a href="{{route('controller39.index')}}">
CRUD Operation Through Ajax
</a>
</td>
</tr>
</table>
</div>
@endsection