@extends('layouts.adminapp')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container">
            <h4 style="margin-top: 44px !important;">Contact Enquiry Form</h4><br>
            <table id="contact-table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Phone Number</th>
                        <th>Services</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($submissions as $submission)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $submission->fname }}</td>
                            <td>{{ $submission->email }}</td>
                            <td>{{ $submission->city }}</td>
                            <td>{{ $submission->number }}</td>
                            <td>{{ $submission->services }}</td>
                            <td>
                                <a href="{{ route('homePageSubmissions.edit', $submission->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('homePageSubmissions.destroy', $submission->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this submission?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#contact-table').DataTable();
    });
</script>
@endsection
