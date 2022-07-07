<!DOCTYPE html>
<html>
<head>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<h2>HTML Table</h2>

<table>
<a class="btn btn-info mb-2" href="/exportpdf">Export PDF</a>

    <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    @foreach ($data as $dt)
    <tr>
        <td>{{ $dt->name }}</td>
        <td>{{ $dt->contact }}</td>
        <td>{{ $dt->country }}</td>
    </tr>
    @endforeach

</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>


