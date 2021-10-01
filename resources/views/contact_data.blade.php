@extends('masterLayout')

@section('title','Contact Data')

@section('main')

    <div class="container">

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">DELETE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="/cont" method="post" id="deleteForm">
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

        <br>
        <h2 class="formText">Contact Us Information</h2><hr>
        <table id="datatable" class="table table-hover table-striped table-responsive-sm table-bordered table-light">
            <thead class="table-primary">
            <tr>
                <th>Contact ID</th>
                <th>Contact Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($contact as $cont)
                <tr>
                    <td>{{$cont['id']}}</td>
                    <td>{{$cont['name']}}</td>
                    <td>{{$cont['email']}}</td>
                    <td>{{$cont['subject']}}</td>
                    <td>{{$cont['message']}}</td>
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
                $('#deleteForm').attr('action','/cont/'+data[0]);
                $('#myModal').modal('show');
            });
        });
    </script>

@endsection
