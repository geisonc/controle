@extends("controle.layout")
@section('tituloForm','Cadastro de Veículo')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-body">
          <form method="POST" action="/veiculo/novo">
            <!--{{ csrf_field() }} -->
            @csrf
            <div class="col-md-12">
              <div class="form-row">
                 <div class="col-lg-4 mb-4">
                   <label for="">MARCA</label>
                   <input class="form-control" id="marca" name="marca"type="text" placeholder="MARCA"  required="">
                 </div>

                 <div class="col-lg-4 mb-4">
                   <label for="">MODELO</label>
                   <input class="form-control" id="modelo" name="modelo" type="text" placeholder="MODELO"  required="">
                 </div>

                 <div class="col-lg-4 mb-4">
                   <label for="">PLACA</label>
                   <input class="form-control" id="placa" name="placa" type="text" placeholder="PLACA"  required="">
                 </div>
              </div>

              <input class="btn btn-primary mb-2" type="submit"  value="CADASTRAR" style="float: right;"></input >

            </div>


          </form>
        </div>
      </div>
    </div>
  </div>







@endsection

@section('vendorAdicional')
  <script>
    $('#btnAdiciona').click(function() {
      window.location='a href="{{ route('veiculo.create') }}';
    });
  </script>
@endsection
