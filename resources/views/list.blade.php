<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Table</h2>
  <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p>                                                                                      
  <div class="table-responsive">          
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>DATE OF BIRTH</th>
        <th>RESIDANCE</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $s)
      <tr>
<td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->date_of_birth }}</td>
        <td>{{ $s->residance }}</td>
        <td><a class="btn btn-primary" href="{{ URL::to('/edit/'.$s->id) }}">EDIT</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>


<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>