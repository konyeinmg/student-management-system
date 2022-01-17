<table class="table">
    <thead>
        <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">speciality</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $studnet)
        <tr>
            <td>{{$studnet->cne}}</td>
            <td>{{$studnet->firstName}}</td>
            <td>{{$studnet->secondName}}</td>
            <td>{{$studnet->age}}</td>
            <td>{{$studnet->speciality}}</td>
            <td>
                <a href='#' class='btn btn-sm btn-info'>Show</a>
                <a href="{{url('/edit/'.$studnet->id)}}" class='btn btn-sm btn-warning'>Edit</a>
                <a href='#' class='btn btn-sm btn-danger'>Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>