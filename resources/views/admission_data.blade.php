@extends('masterLayout')

@section('title','Student Data')

@section('main')

    <div class="container">

        <!-- Modal -->
        <div id="Modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">DELETE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form action="/std" method="post" id="deleteForm">
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
        <h2 class="formText">Admission Information</h2><hr>

        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Update User</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="/stud" id="editForm" method="post">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        <div class="modal-body" id="form">
                            <input type="hidden" name="id1" id="id1">
                            <label for="firstName" class="formText">First Name:</label><br>
                            <input type="text" id="firstName" name="firstName" style="width: 300px">
                            <div style="color: red">{{$errors->first('firstName')}}</div>
                            <div id="fc"></div>
                            <br><br>
                            <label for="lastName" class="formText">Last Name:</label><br>
                            <input type="text" id="lastName" name="lastName" style="width: 300px">
                            <div style="color: red">{{$errors->first('lastName')}}</div>
                            <div id="lc"></div>
                            <br><br>
                            <label for="fatherName" class="formText">Father Name:</label><br>
                            <input type="text" id="fatherName" name="fatherName" style="width: 300px">
                            <div style="color: red">{{$errors->first('fatherName')}}</div>
                            <div id="fac"></div>
                            <br><br>
                            <label class="formText" for="gender">Gender</label><br>
                            <select id="gender" name="gender" class="custom-select" style="width: 150px">
                                <option disabled selected>Choose..</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                            <div style="color: red">{{$errors->first('gender')}}</div>
                            <br><br>
                            <label for="dob" class="formText">Date Of Birth:</label><br>
                            <input type="date" id="dob" name="dob">
                            <div style="color: red">{{$errors->first('dob')}}</div>
                            <br><br>
                            <label for="cnic" class="formText">CNIC:</label><br>
                            <input type="text" id="cnic" name="cnic" placeholder="xxxxx-xxxxxxx-x" style="width: 300px">
                            <div style="color: red">{{$errors->first('cnic')}}</div>
                            <div id="cc"></div>
                            <br><br>
                            <label for="phoneNo" class="formText">Phone No.:</label><br>
                            <input type="tel" id="phoneNo" name="phoneNo" placeholder="03xxxxxxxxx" style="width: 300px">
                            <div style="color: red">{{$errors->first('phoneNo')}}</div>
                            <div id="pc"></div>
                            <br><br>
                            <label class="formText" for="religion">Select Religion</label><br>
                            <select id="religion" name="religion" class="custom-select" style="width: 150px">
                                <option selected disabled>Choose...</option>
                                <option value="Islam" selected>Islam</option>
                                <option value="Christian">Christian</option>
                                <option value="Other">Other</option>
                            </select>
                            <div style="color: red">{{$errors->first('religion')}}</div>
                            <br><br>
                            <label for="email" class="formText">Email:</label><br>
                            <input type="email" id="email" name="email" placeholder="example@example.com" style="width: 300px">
                            <div style="color: red">{{$errors->first('email')}}</div>
                            <div id="ec"></div>
                            <br><br>
                            <label for="address" class="formText">Address:</label><br>
                            <input type="text" id="address" name="address" style="width: 300px; height: 215px">
                            <div style="color: red">{{$errors->first('address')}}</div>
                            <div id="ac"></div>
                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="update" name="update">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table id="datatable" class="table table-hover table-striped table-responsive-sm table-responsive table-bordered table-light">
            <thead class="table-success">
            <tr>
                <th>Admission ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Father Name</th>
                <th>Sex</th>
                <th>DOB</th>
                <th>CNIC</th>
                <th>Phone No.</th>
                <th>Religion</th>
                <th>Email</th>
                <th>Address</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($student as $std)
                <tr>
                        <td>{{$std['id']}}</td>
                        <td>{{$std['first']}}</td>
                        <td>{{$std['second']}}</td>
                        <td>{{$std['father']}}</td>
                        <td>{{$std['gender']}}</td>
                        <td>{{$std['dob']}}</td>
                        <td>{{$std['cnic']}}</td>
                        <td>{{$std['phone']}}</td>
                        <td>{{$std['religion']}}</td>
                        <td>{{$std['email']}}</td>
                        <td>{{$std['address']}}</td>
                        <td><img src='{{asset('IMAGES/Upload/'.$std['image'])}}' alt='Image' width='100px' height='100px'></td>
                        <td><button class='btn btn-sm btn-success edit'>Edit</button></td>
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
            table.on('click','.edit',function () {
                $tr=$(this).closest('tr');
                if($($tr).hasClass('child')){
                    $tr=$tr.prev('.parent');
                }
                var data=table.row($tr).data();
                console.log(data);
                $('#firstName').val(data[1]);
                $('#lastName').val(data[2]);
                $('#fatherName').val(data[3]);
                $('#gender').val(data[4]);
                $('#dob').val(data[5]);
                $('#cnic').val(data[6]);
                $('#phoneNo').val(data[7]);
                $('#religion').val(data[8]);
                $('#email').val(data[9]);
                $('#address').val(data[10]);
                $('#editForm').attr('action','/stud/'+data[0]);
                $('#myModal').modal('show');
            });

            var table=$('#datatable').DataTable();
            table.on('click','.delete',function () {
                $tr=$(this).closest('tr');
                if($($tr).hasClass('child')){
                    $tr=$tr.prev('.parent');
                }
                var data=table.row($tr).data();
                console.log(data);
                $('#deleteForm').attr('action','/std/'+data[0]);
                $('#Modal').modal('show');
            });
        });
    </script>

@endsection
