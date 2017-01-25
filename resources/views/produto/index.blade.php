
@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="container">
  

  <section class="content-header">
      <h1>
          Produto
          <small>Admin produto</small>
      </h1>

  </section>

  <!-- Main content -->
  <section class="content">
      <div class="row">
          <div class="col-xs-12">
              <div class="box">
                  <div class="box-header">
                      <h3 class="box-title">Tabela</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body form-group">
                    <a href="{{route('produto.create')}}" class="btn btn-primary">Novo</a>
                  </div>
                  <div class="box-body table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th><input type="checkbox" id="checkall"></th>
                                  <th >Ações</th>
                                  <th>Nome</th>
                                  <th>Data de Criação</th>
                                  <th>Data de Modificação</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($arrayproduto as $produto)

                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>

                                <td>
                                  <span data-placement="top" data-toggle="tooltip" title="Visualizar"><a href="{{route('produto.show',$produto->id)}}" class="btn btn-info btn-xs" data-title="view"><span class="glyphicon glyphicon-eye-open"></span></a></span>
                                  
                                  <span data-placement="top" data-toggle="tooltip" title="Editar"><a href="{{route('produto.edit',$produto->id)}}" class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></a></span>
                                
                                  <span data-placement="top" data-toggle="tooltip" title="Deletar"><button class="btn btn-danger btn-xs deletar"  data-title="Delete" data-toggle="modal"  data-id='{{ $produto->id }}' onclick="del({{ $produto->id }})"><span class="glyphicon glyphicon-trash"></span></button></span></td>
                                <td>{{ $produto->produto }}</td>
                                <td>{{ $produto->created_at }}</td>
                                <td>{{ $produto->updated_at }}</td>

                            </tr>
                            @endforeach

                          </tbody>
                      </table>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
          </div>
      </div>

  </section><!-- /.content -->
</section>
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          <h4 class="modal-title custom_align" id="Heading">Deletar registro</h4>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Deseja realmente excluir este registro?</div>
        </div>
        <div class="modal-footer ">
        <form action="/produto/" method="post">
            {{ method_field('delete') }} {{ csrf_field() }}
            <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> sim</button>
        </form>

        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Não</button>
      </div>
      </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>
    <script>
      function del(id){
        $('#delete').modal('show');
        var url = '/produto/'+id;
        $('form').attr("action", url);
      }
    </script>
@endsection
