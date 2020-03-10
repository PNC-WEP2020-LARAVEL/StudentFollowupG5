<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/app.css">
<div class="container">
    <a href="{{route('showform')}}" class="btn btn-primary mt-3">Add Student</a>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Gender</th>
                        <th>Picture</th>
                        <th>Province</th>
                        <th>Status</th>
                        <th>Tutor</th>
                        <th>Action</th>
                    </tr>
                    
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->firstname}}.{{$student->lastname}}</td>
                        <td>{{$student->class}}</td>
                        <td>{{$student->year}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->picture}}</td>
                        <td>{{$student->province}}</td>
                        <td>{{$student->status}}</td>
                        <td>{{$student->user_id}}</td>
                        <td>
                            <a href="{{ route('edit',$student->id) }}"><i class="material-icons">edit</i></a>
                            <a href=""><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
</div>