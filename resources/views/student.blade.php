<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
</head>

<body>

    @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>

    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <img class="card-img-top" src="https://pilot.simplypass.co.za/wp-content/uploads/2019/09/content.png" alt="Card image cap">
                        <h5 class="card-title">List of Students</h5>
                        <p class="card-text">Enter the information of the student.</p>
                        <form action="{{url('/store')}}" method="post">
                            @csrf
                            <div class='form-group'>
                                <labe>CNE</labe>
                                <input name='cne' type='text' class='form-control' placeholder="Enter CNE" />
                            </div>
                            <div class='form-group'>
                                <labe>First Name</labe>
                                <input name='firstName' type='text' class='form-control' placeholder="Enter First Name" />
                            </div>
                            <div class='form-group'>
                                <labe>Second Name</labe>
                                <input name='secondName' type='text' class='form-control' placeholder="Enter Second Name" />
                            </div>
                            <div class='form-group'>
                                <labe>Age</labe>
                                <input name='age' type='text' class='form-control' placeholder="Enter Age" />
                            </div>
                            <div class='form-group'>
                                <labe>Speciality</labe>
                                <input name='speciality' type='text' class='form-control' placeholder="Enter Speciality" />
                            </div>
                            <br />
                            <input type="submit" class="btn btn-info" value="Save" />
                            <input type="submit" class="btn btn-warning" value="Reset" />
                        </form>
                    </div>
            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <img class="card-img-top" src="https://pilot.simplypass.co.za/wp-content/uploads/2019/09/content.png" alt="Card image cap">
                        <h5 class="card-title">List of Students</h5>
                        <p class="card-text">Update Information here.</p>
                        <form action="{{url('/update/'.$student->id)}}" method="post">
                            @csrf
                            <div class='form-group'>
                                <labe>CNE</labe>
                                <input value={{$student->cne}} name='cne' type='text' class='form-control' placeholder="Enter CNE" />
                            </div>
                            <div class='form-group'>
                                <labe>First Name</labe>
                                <input value={{$student->firstName}} name='firstName' type='text' class='form-control' placeholder="Enter First Name" />
                            </div>
                            <div class='form-group'>
                                <labe>Second Name</labe>
                                <input value={{$student->secondName}} name='secondName' type='text' class='form-control' placeholder="Enter Second Name" />
                            </div>
                            <div class='form-group'>
                                <labe>Age</labe>
                                <input value={{$student->age}} name='age' type='text' class='form-control' placeholder="Enter Age" />
                            </div>
                            <div class='form-group'>
                                <labe>Speciality</labe>
                                <input value={{$student->speciality}} name='speciality' type='text' class='form-control' placeholder="Enter Speciality" />
                            </div>
                            <br />
                            <input type="submit" class="btn btn-info" value="Update" />
                            <input type="submit" class="btn btn-warning" value="Reset" />
                        </form>
                    </div>
            </section>
        </div>
    </div>
    @endif
    <footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>