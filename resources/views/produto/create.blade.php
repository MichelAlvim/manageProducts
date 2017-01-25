@extends('layouts.app')
@section('content')

<section class="container">

<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Produto
            <small>Cadastrar</small>
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
                        <h3 class="box-title">Produto Cadastrar</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="/produto">
                        {{ csrf_field() }}
                        <div class="box-body row">
                            <div class="form-group col-md-5">
                                <label for="produto">Produto</label>
                                @if ($errors->has('produto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('produto') }}</strong>
                                    </span>
                                @endif
                                <input type="text" class="form-control"  id="produto"  name="produto" placeholder="Digite o nome do Produto">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</section>
@endsection
