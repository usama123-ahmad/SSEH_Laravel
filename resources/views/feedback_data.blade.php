@extends('masterLayout')

@section('title','Feedback Data')

@section('main')

    <div class="container">

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
        <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">DELETE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                <form action="/feed" method="post" id="deleteForm">
                      {{csrf_field()}}
                      {{method_field('DELETE')}}
                      <div class="modal-body">
                          <p>Do you want to delete?</p>
                      </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
                </form>
                </div>
            </div>
        </div>

    <h2 class="formText">Feedback Information</h2><hr>
    <table id="datatable" class="table table-hover table-striped table-bordered table-light">
        <thead class="table-dark">
        <tr>
            <th>Feedback ID</th>
            <th>Feedback</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($feedback as $feed)
            <tr>
                <td>{{$feed['id']}}</td>
                <td>{{$feed['feedback']}}</td>
                <td><button type="submit" class='btn-sm btn-danger delete'>Delete</button></td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var table=$('#datatable').DataTable();
            table.on('click','.delete',function () {
                $tr=$(this).closest('tr');
                if($($tr).hasClass('child')){
                    $tr=$tr.prev('.parent');
                }
                var data=table.row($tr).data();
                console.log(data);
                $('#deleteForm').attr('action','/feed/'+data[0]);
                $('#myModal').modal('show');
            });
        });
    </script>

@endsection
