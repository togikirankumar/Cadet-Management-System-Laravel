
<div class="card mb-3">
    <img src="https://media.gettyimages.com/photos/cadets-march-during-the-annual-national-cadet-corps-rally-2020-at-picture-id1197115937?s=2048x2048" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of cadets</h5>
        <p class="card-text">You can find here all the informatins about cadets in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Reg No</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Camps Attended</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






