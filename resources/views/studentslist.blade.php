<div class="card mb-3">
  <img class="card-img-top" src="https://www.educationalappstore.com/images/best-apps-for-education.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find here all the information about students in the system.</p>
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
  </div>
</div>