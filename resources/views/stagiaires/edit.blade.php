@extends('adminlte::page')

@section('title')

Modifier le stagiaire
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
                  <h4> Modifier le stagiaire</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('stagiaires.update',['stagiaire' => $stagiaire])}}" class="row g-3" method="post"  enctype="multipart/form-data">
                  @csrf
                  @method('put')
                  <div class="form-group col-md-6">
                      <label for="nom" class="form-label">Nom</label>
                      <input type="text" class="form-control" name="nom" placeholder="nom" value="{{old('nom',$stagiaire->nom)}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="prenom" value="{{old('prenom',$stagiaire->prenom)}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="ecole" class="form-label">Ecole</label>
                        <input type="text" class="form-control" name="ecole" placeholder="ISTA/ENSA/EST/ENCG..." value="{{old('ecole',$stagiaire->ecole)}}">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="filiere" class="form-label">Filiere</label>
                          <input type="text" class="form-control" name="filiere" placeholder="filiere" value="{{old('filiere',$stagiaire->filiere)}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ville" class="form-label">Ville</label>
                            <input type="text" class="form-control" name="ville" placeholder="ville" value="{{old('ville',$stagiaire->ville)}}">
                          </div>
                          <div class="form-group col-md-6">
                              <label for="phone" class="form-label">Phone</label>
                              <input type="text" class="form-control" name="phone" placeholder="07....." value="{{old('phone',$stagiaire->phone)}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_de_début" class="form-label">Date Début</label>
                                <input type="date" class="form-control" name="date_de_début"  value="{{old('date_de_début',$stagiaire->date_de_début)}}">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="date_de_fin" class="form-label">Date Fin </label>
                                  <input type="date" class="form-control" name="date_de_fin"  value="{{old('date_de_fin',$stagiaire->date_de_fin)}}"">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="CV" class="form-label">CV</label>
                                  <input type="file" class="form-control" name="CV"  value="{{old('CV',$stagiaire->CV)}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Demande_Stage" class="form-label">Demande_stage</label>
                                    <input type="file" class="form-control" name="Demande_Stage" value="{{old('Demande_Stage')}}">
                                  </div>
                     <div class="form-group" style="margin-left:1%">
                        <button type="submit" class="btn btn-primary" >
                            Modifier
                        </button>
                  </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
