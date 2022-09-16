<div class="row p-4 pt-5">
<div class="col-12">
<div class="card">
<div class="card-header bg-primary d-flex align-items-center">
<h3 class="card-title flex-grow-1"><i class="fa fa-users fa-2x"></i>Liste des utilisateurs</h3>


<div class="card-tools d-flex align-items-center ">
<a class="btn btn-link text-white mr-4 d-block"> <i class="fa fa-user-plus"></i>Nouvel utilisateur</a>
<div class="input-group input-group-dm" style="width: 250px;">
<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
<div class="input-group-append">
<button type="submit" class="btn btn-default">
<i class="fas fa-search"></i>
</button>
</div>
</div>
</div>
</div>

<div class="card-body table-responsive p-0 table-striped" style="height: 300px; ">
<table class="table table-head-fixed text-nowrap">
<thead>
<tr>
<th style="with: 5%;"></th>
<th style="with: 25%;">Utilisateurs</th>
<th style="with: 20%;">Roles</th>
<th style="with: 20%;"class="text-center">Ajouté</th>
<th style="with: 30%;" class="text-center">Action</th>
</tr>
</thead>
<tbody>
  @foreach ( $users as $user )
<tr>    
<td>
@if ($user->sex=="0")
   <img src="{{asset('images/woman.png')}}" width="24"/>
@else
  <img src="{{asset('images/man.png')}}" width="24"/>
@endif
</td>
<td>{{$user->nom}}</td>
<td>
 {{-- @foreach ($user->roles as $role)
      {{ $role->nom,}}|
@endforeach   : first way  --}}
{{$user->AllRolesName}}
</td>
<td class="text-center"><span class="tag tag-success">{{\Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</span></td>
<td class="text-center">
<button class="btn btn-link"><i class="far fa-edit"></i></button>
<button class="btn btn-link"><i class="fas fa-trash-alt"></i></button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
 {{-- footer --}}
 <div class="card-footer">
  <div class="float-right">
       {{$users->links()}}
  </div>
 </div>


</div>

</div>
</div>