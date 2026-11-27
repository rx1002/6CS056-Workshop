
@include('components.navbar')

<h1>Edit Student</h1>

<form action="/students/{{ $student->id }}" method="POST">

    @if ($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @csrf
    @method("PUT")

    <label>Name:</label>
    <input name="name"
           value="{{ old('name', $student->name) }}" />
    <br />

    <label>Email:</label>
    <input name="email"
           value="{{ old('email', $student->email) }}" />
    <br />

    <label>Phone:</label>
    <input name="phone"
           value="{{ old('phone', $student->phone) }}" />
    <br />

    <label>Address:</label>
    <textarea name="address">{{ old('address', $student->address) }}</textarea>
    <br />

    <label>Date of Birth:</label>
    <input
        name="date_of_birth"
        type="date"
        value="{{ old('date_of_birth', $student->date_of_birth->format('Y-m-d')) }}"
    />
    <br />

    <button type="submit">Edit</button>

</form>
