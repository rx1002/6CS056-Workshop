
@include('components.navbar')

<h1>Students</h1>

@if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<a href="/students/create">Create New Student</a>

@if ($students->isNotEmpty())

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->age }}</td>

            <td>
                <form action="/students/{{ $student->id }}"
                      method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Delete</button>
                </form>

                <a href="/students/{{ $student->id }}/edit">
                    Edit
                </a>

                <a href="/students/{{ $student->id }}">
                    Details
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@else

<h2>No student record available</h2>

@endif
