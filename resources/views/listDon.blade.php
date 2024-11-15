
@extends(' layouts.app')
 
@section('contenu')


<div class="row d-flex justify-content-center align-items-center mt-4">
    <div class="col-12 col-md-9">


<div class="card shadow mb-4 TableCard">
    <div class="card-header py-3">
        <div class="row d-flex">
            <div class="col-sm-9 d-flex justify-content-start">
                <h2 class="m-0 font-weight-bold text-primary">Liste des dons</h2>

            </div>
            {{-- <div class="col-sm-3 d-flex justify-content-end ms-auto p-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajoutFiliereModal">
                    <i class="fas fa-plus "></i>
                    Ajouter filière
                </button>
            </div> --}}
        </div>
    </div>
    <div class="card-body">


@if(count($errors) > 0)
<div id="ul_alert_error">
    <div class="alert alert-danger d-flex align-items-center">
        <ul id="ul_alert">
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          <script type="text/javascript">setTimeout(function() {
          document.getElementById('ul_alert_error').innerHTML = "";},5000);</script>
          @endforeach
      </ul>
  </div>
</div>
@endif
<div id="ul_alert">

</div>

<div class="table-responsive">
    @csrf
    <h1 class="MCenter"></h1>
    <table class="table table-bordered table-striped" id="editable">
        <thead>
            <tr class="MCenter">
                <th>N°</th>
                <th>Nom</th>
                <th>Montant</th>
                <th>Email</th>
                <th>ID_Transaction</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
<!--         <pre>
<?php 
// print_r($liste);
/*guichet_service
guichet_personnel*/ 
 ?></pre> -->
        <tbody>
            <?php $i=1; if ($listDon->count() > 0):  if (isset($_GET['page'])) {{ $i=$_GET['page']*5 - 4;}} ?>
                <?php foreach ($listDon as $don): ?>
            <tr  class="MCenter">


                {{-- <td style="display: none;">{{$La_don->id}}</td> --}}
                <td><?=$i++ ?></td>
                <td>{{$don->utilisateur->nom}}</td>
                <td>{{$don->montant}}</td>
                <td>{{$don->utilisateur->email}}</td>
                <td>{{$don->transaction_id}}</td>
                <td>{{\Carbon\Carbon::parse($don->date)->format('d-m-Y H:i:s')}}</td>
                <td class="MCenter">
                    @if($don->status == "SUCCESSFUL")
                        <i class=" fas fa-check-circle successIcone"></i>
                    @elseif ($don->status == "INITIER")
                        <i class="fa-solid fa-circle-check enttenteIcone"></i>
                    @else
                        <i class="fa-solid fa-circle-check failedIcone"></i>
                    @endif
                </td>
            </tr> 
                <?php endforeach ?> 
            <?php endif ?>
        </tbody>
        
        <tfoot  class="MCenter">
            <th>N°</th>
            <th>Nom</th>
            <th>Montant</th>
            <th>Email</th>
            <th>ID_Transaction</th>
            <th>Date</th>
            <th>Status</th>
        </tfoot>
    </table>
</div>

    <div class="row">
        <div class="col-9 ">
            <div class="paginate float-end">
                {{ $listDon->links() }}   
            </div>
        </div>
    </div>

    </div><!-- fin card shadow -->
</div><!-- fin card-body -->

    </div> <!-- fin  -->
</div> <!-- fin row -->

<div class="row">
    <div class="col-12 "></div> 
</div>


<!-- ****************************** GESTION DES FILIERES *********************************** -->
@endsection
