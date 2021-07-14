<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button[type=submit] {
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>

<h3>
    User Form
</h3>

<div>
    <form action="/userForm" method="get">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <label>Identity Number</label>
            <input type="text" name="identityNumber">
            @error('identityNumber')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>First Name</label>
            <input type="text" name="firstname">
            @error('firstname')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Last Name</label>
            <input type="text" name="lastname">
            @error('lastname')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Phone</label>
            <input type="text" name="phone">
            @error('phone')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Gender</label>
            <input type="radio">
            <label>Male</label>
            <input type="radio">
            <label>Female</label>
        </div>

        <div>
            <button type="submit">Submit</button>
            <button type="submit">Reset</button>
        </div>
    </form>
</div>

</body>
</html>
