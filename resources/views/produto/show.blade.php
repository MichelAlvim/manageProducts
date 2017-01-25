@extends('layouts.app')
@section('content')

<section class="container">
    

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Produto
            <small>Consultar</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Status Visualizar</h3>
                    </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="row"><label for="nome">Produto</label></div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control"  id="produto"  name="produto" placeholder="{{$produto->produto}}" readonly>
                                </div>    
                            </div>
                            
                            <div class="row"><label for="nome">Data Criação</label></div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control"  id="ciacao"  name="ciacao" placeholder="{{$produto->created_at}}" readonly>
                                </div>    
                            </div>
                            
                            <div class="row"><label for="nome">Data Modificação</label></div>
                            <div class="row">
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control"  id="atualizacao"  name="atualizacao" placeholder="{{$produto->updated_at}}" readonly>
                                </div>
                            </div>
                            
                        </div><!-- /.box-body -->
                        <div class="row ">
                            <div class="box-footer">
                                <a href="{{ url('produto')}}"  class="btn btn-primary">Voltar</a>
                            </div>    
                        </div>
                        
                </div><!-- /.box -->





        </div>   <!-- /.row -->
    </section><!-- /.content -->
</section>
@endsection
