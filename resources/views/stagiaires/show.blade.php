@extends('adminlte::page')

@section('title')
Présentation du stagiaire
@endsection

@section('content_header')
<h4>Présentation du stagiaire</h4>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        
        <div class="col-md-18 mx-auto">
          <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                  <h3>{{$stagiaire->nom ." ".$stagiaire->prenom}}</h3>
                </div>
            </div>
          
            <div class="mt-2 text-center font-weight-bold text-uppercase">
              <a href="{{route('show.demande',['stagiaire'=>$stagiaire])}}" class="btn btn-outline-dark" target="__blank">Demande de Stagiaire</a>
                <a href="{{route('download.cv',['userId'=>$stagiaire->id])}}" class="btn btn-outline-danger">CV de Stagiaire</a>
              </div>
              <hr>
          
            <div class="card-body">
                <div class="row g-3" >
                    <div class="form-group col-md-3">
                      <label for="nom" class="form-label">Nom</label>
                      <input type="text" class="form-control rounded-0" name="nom" disabled placeholder="nom" value="{{$stagiaire->nom}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control rounded-0" disabled name="prenom" placeholder="prenom" value="{{$stagiaire->prenom}}">
                      </div>
                      <div class="form-group col-md-3">
                        <label for="ecole" class="form-label">Ecole</label>
                        <input type="text" class="form-control rounded-0" disabled name="ecole" placeholder="ISTA/ENSA/EST/ENCG..." value="{{$stagiaire->ecole}}">
                      </div>
                      <div class="form-group col-md-3">
                          <label for="filiere" class="form-label">Filiere</label>
                          <input type="text" class="form-control rounded-0" disabled name="filiere" placeholder="filiere" value="{{$stagiaire->filiere}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="ville" class="form-label">Ville</label>
                            <input type="text" class="form-control rounded-0"  disabled name="ville" placeholder="ville" value="{{$stagiaire->ville}}">
                          </div>
                          <div class="form-group col-md-3">
                              <label for="phone" class="form-label">Telephone</label>
                              <input type="text" class="form-control" disabled name="phone" placeholder="07....." value="{{$stagiaire->phone}}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="date_de_début" class="form-label">Date Début</label>
                                <input type="date" class="form-control rounded-0" disabled name="date_de_début"  value="{{$stagiaire->date_de_début}}">
                              </div>
                              <div class="form-group col-md-3">
                                  <label for="date_de_fin" class="form-label">Date Fin </label>
                                  <input type="date" class="form-control rounded-0" disabled name="date_de_fin"  value="{{$stagiaire->date_de_fin}}">
                                </div>
                               
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

