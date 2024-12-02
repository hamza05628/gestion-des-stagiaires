@extends('adminlte::page')

@section('title')

Ajouter un nouveau stagiaire
@endsection

@section('content_header')

@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row">
        
        <div class="col-md-18 mx-auto">
          <div class="card my-5">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                  <h4> Ajouter un nouveau stagiaire </h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('stagiaires.store')}}" class="row g-3" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">
                      <label for="nom" class="form-label">Nom</label>  <span style="color: red">*</span>
                      <input type="text" class="form-control" name="nom" placeholder="nom" value="{{old('nom')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom" class="form-label">Prenom</label> <span style="color: red">*</span>
                        <input type="text" class="form-control" name="prenom" placeholder="prenom" value="{{old('prenom')}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="ecole" class="form-label">Ecole</label> <span style="color: red">*</span>
                        <input type="text" class="form-control" name="ecole" placeholder="ISTA/ENSA/EST/ENCG..." value="{{old('ecole')}}">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="filiere" class="form-label">Filiere</label> <span style="color: red">*</span>
                          <input type="text" class="form-control" name="filiere" placeholder="filiere" value="{{old('filiere')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ville" class="form-label">Ville</label>  <span style="color: red">*</span>
                            <input type="text" class="form-control" name="ville" placeholder="ville" value="{{old('ville')}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="phone" class="form-label">Telephone</label>  <span style="color: red">*</span>
                              <input type="text" class="form-control" name="phone" placeholder="07....." value="{{old('phone')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_de_début" class="form-label">Date Début</label> <span style="color: red">*</span>
                                <input type="date" class="form-control" name="date_de_début"  value="{{old('date_de_début')}}">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="date_de_fin" class="form-label">Date Fin </label>  <span style="color: red">*</span>
                                  <input type="date" class="form-control" name="date_de_fin"  value="{{old('date_de_fin')}}">
                                </div>
                                
                                  <div class="form-group col-md-6">
                                    <label for="CV" class="form-label">CV</label>  <span style="color: red">*</span>
                                    <input type="file" class="form-control" name="CV" placeholder="CV" value="{{old('CV')}}">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="Demande_Stage" class="form-label">Demande Stage</label>  <span style="color: red">*</span>
                                      <input type="file" class="form-control" name="Demande_Stage" placeholder="Demande_Stage....." value="{{old('Demande_Stage')}}">
                                    </div>
                     <div class="form-group" style="margin-left:1%">
                        <button type="submit" class="btn btn-primary" >
                            ajouter
                        </button>
                  </form> 
            </div>
        </div>
    </div>
</div>
</div>

@endsection

