
@include('components.navbar')

<h1>Student Details</h1>

<p>ID: {{ $student->id }}</p>
<p>Name: {{ $student->name }}</p>
<p>Email: {{ $student->email }}</p>
<p>Phone: {{ $student->phone }}</p>
<p>Address: {{ $student->address }}</p>
<p>Date of Birth: {{ $student->date_of_birth->format('Y-m-d') }}</p>
<p>Age: {{ $student->age }}</p>

<a href="/students">Back to Students</a>
