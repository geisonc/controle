@extends("controle.layout")
@section('tituloForm')


      Listagem de Veículos

    <div style="position: absolute; right: 0; padding-right: 30px;">
      <button id="btnAbreCreate" class="btn btn-primary mb-2" style="float: right;" >ADICIONAR</button>
    </div>

@endsection

@section('headAdicional')
<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="card">
   <!--<div class="card-header"></div>-->

    <div class="card-body">
      <table id="tabelaVeiculos" class="display">
         <thead>
            <tr>
               <!--<th data-priority="1">Empresa</th>-->
               <th>Marca</th>
               <th>Modelo</th>
               <th>Placa</th>
               <th class="sort-numeric">Horímetro</th>
               <th>Prev. Manut. Dias</th>
               <th>Última Manut.</th>
               <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($veiculos as $veiculo)
              <tr>
                <td> {{$veiculo->marca}} </td>
                <td> {{$veiculo->modelo}} </td>
                <td> {{$veiculo->placa}} </td>
                <td> {{$veiculo->horimetro}} </td>
                <td> 33 </td>
                <td> {{$veiculo->ultimaManutencao}} </td>
                <td> </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>








@endsection

@section('vendorAdicional')
  <script src="https://code.jquery.com/jquery-3.5.1.js" rel="stylesheet"> </script>
  <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" rel="stylesheet"> </script>
  <script>
    $(document).ready(function () {
        $('#tabelaVeiculos').DataTable();
    } );

    //
    $('#btnAbreCreate').click(function() {
      window.location='{{ route('veiculo.create') }}';
    });
  </script>



@endsection
