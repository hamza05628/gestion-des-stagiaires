@extends('adminlte::page')
@section('plugins.Datatables',true) 

@section('title')

Liste des stagiaires
@endsection

@section('content_header')
<h1>Liste des stagiaires</h1>
@endsection

@section('content')
<div class="container" style="font-size:13px ;height:auto;margin-left:-2%">
    
    <div class="row mx-auto ">
        <div class="col-md-13 mx-auto ">
          <div class="card my-3">
            <div class="card-header">
                <div class="text-center font-weight-bold text-uppercase">
                  <h4> Stagiaires </h4>
                </div>
            </div>
            <div class="card-body"> 
              
                
                <table id="myTable" class="table table-bordered table-stripped text-center" style="font-size:17px;margin-left:-2%" >
                   
                    <thead >
                    
                        <tr>
                            <th >id</th>          
                            <th >Nom</th>
                        <!-- <th>numéro_dinscription</th> -->
                            <th>Prenom</th>
                            <th>Ecole</th>
                            <th>Filiere</th>
                            <th>Ville</th>
                            <th>Telephone</th>
                            <th>Date_Début</th>
                            <th>Date_Fin</th> 
                            <th style="visibility: hidden"></th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stagiaires as $key => $stagiaire )
                            <tr>
                                <td >{{$key+=1}}</td>
                                <td >{{$stagiaire->nom}}</td>
                                <td >{{$stagiaire->prenom}}</td>
                                <td >{{$stagiaire->ecole}}</td>
                                <td >{{$stagiaire->filiere}}</td>
                                <td >{{$stagiaire->ville}}</td> 
                                <td >{{$stagiaire->phone}}</td>
                                <td >{{$stagiaire->date_de_début}}</td>
                                <td >{{$stagiaire->date_de_fin}}</td>
                         
                                 
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('stagiaires.show',$stagiaire->id)}}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye" style="font-size: 10px"></i>
                                </a>
                                <a href="{{route('stagiaires.edit',['stagiaire' => $stagiaire])}}" class="btn btn-sm btn-warning mx-1">
                                    <i class="fas fa-edit" style="font-size: 10px"></i>
                                </a> 
                                <form id="{{$stagiaire->id}}"action="{{route('stagiaires.destroy',$stagiaire->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" onclick="deleteEmp({{$stagiaire->id}})" class="btn btn-sm btn-danger">
                                    <i class="fas fa-solid fa-user-minus" style="font-size: 10px"></i>
                                </button> 
                            </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
               
              </div>
          </div> 
        </div>
    </div>
</div>

@endsection


@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                   'excel', 'csv', 'pdf', 'print', 'colvis'
                ]
            });
        });
    </script>
    <script>
           function deleteEmp(id) {
    .then((result) => {
        if (result.isConfirmed) {
            document.getElementById(id).submit();
            Swal.fire(
            'Deleted!',
            'stagiaire  has been deleted.',
            'success'
            )
        }
})
   }
    </script>
@if (session()->has('success'))

<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{session()->get('success')}}",
        showConfirmButton: false,
        timer: 2500
})
</script>
    
@endif

@endsection

