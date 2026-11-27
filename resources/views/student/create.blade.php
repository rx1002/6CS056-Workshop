
@include('components.navbar')

<h1>Create Student</h1>

<form action="/students" method="POST">

    @if ($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @csrf

    <label>Name:</label>
    <input name="name" value="{{ old('name') }}" />
    <br />

    <label>Email:</label>
    <input name="email" value="{{ old('email') }}" />
    <br />

    <label>Phone:</label>
    <input name="phone" value="{{ old('phone') }}" />
    <br />

    <label>Address:</label>
    <textarea name="address">{{ old('address') }}</textarea>
    <br />

    <label>Date of Birth:</label>
    <input
        name="date_of_birth"
        type="date"
        value="{{ old('date_of_birth') }}"
    />
    <br />

    <button type="submit">Submit</button>

</form>
