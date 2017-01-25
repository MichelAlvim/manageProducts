@extends('layouts.app')
@section('content')

<section class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Produto
            <small>Editar</small>
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
                        <h3 class="box-title">Produto Editar</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="/produto/{{ $produto->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body row">
                            <div class="form-group col-md-5">
                                <label for="produto">Produto</label>
                                <input type="text" class="form-control"  id="produto"  name="produto" value="{{$produto->produto}}">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!-- left column -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</section>
@endsection
