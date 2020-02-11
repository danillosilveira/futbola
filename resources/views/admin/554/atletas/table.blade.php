<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="atletas-table" width="100%">
    <thead>
     <tr>
        <th>Sobre Nome</th>
        <th>Idade</th>
        <th>Tipo Sanguineo</th>
        <th>Data De Nascimento</th>
        <th>C P F</th>
        <th>R G</th>
        <th>Grau Ensino</th>
        <th>Instituicao</th>
        <th>Ala</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($atletas as $atletas)
        <tr>
            <td>{!! $atletas->sobre_nome !!}</td>
            <td>{!! $atletas->idade !!}</td>
            <td>{!! $atletas->tipo_sanguineo !!}</td>
            <td>{!! $atletas->data_de_nascimento !!}</td>
            <td>{!! $atletas->c_p_f !!}</td>
            <td>{!! $atletas->r_g !!}</td>
            <td>{!! $atletas->grau_ensino !!}</td>
            <td>{!! $atletas->instituicao !!}</td>
            <td>{!! $atletas->ala !!}</td>
            <td>
                 <a href="{{ route('admin.554.atletas.show', collect($atletas)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view atletas"></i>
                 </a>
                 <a href="{{ route('admin.554.atletas.edit', collect($atletas)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit atletas"></i>
                 </a>
                 <a href="{{ route('admin.554.atletas.confirm-delete', collect($atletas)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.554.atletas.delete', collect($atletas)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete atletas"></i>

                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Item? This operation is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        $('#atletas-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#atletas-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#atletas-table').on( 'length.dt', function ( e, settings, len ) {
                     setTimeout(function(){
                            $('.livicon').updateLivicon();
                     },500);
                  } );

                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

@stop
