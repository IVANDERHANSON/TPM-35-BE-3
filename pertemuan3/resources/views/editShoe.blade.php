<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Shoe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Edit Shoe</h1>
    <div class="w-80 d-flex justify-content-center">
        <form action="/update-shoe/{{ $shoe->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label for="Name" class="form-label">Shoe Name</label>
              <input type="text" class="form-control" id="Name" aria-describedby="emailHelp" name="Name" value="{{ $shoe->Name }}">
              {{-- @foreach ($errors->all() as $error)
                  <p style="color: red;">{{ $error }}</p>
              @endforeach --}}
              @error('Name')
                <p style="color: red;">The Name field is required.</p>
              @enderror
            </div>
            <div class="mb-3">
                <label for="Size" class="form-label">Size</label>
                <input type="number" class="form-control" id="Size" aria-describedby="emailHelp" name="Size" value="{{ $shoe->Size }}">
                @error('Size')
                <p style="color: red;">The Size field is required.</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Color</label><br>
                <input type="radio" id="Red" name="Color" value="Red">
                <label for="Red">Red</label><br>
                <input type="radio" id="Blue" name="Color" value="Blue">
                <label for="Blue">Blue</label><br>
                <input type="radio" id="Black" name="Color" value="Black">
                <label for="Black">Black</label><br>
                <input type="radio" id="White" name="Color" value="White">
                <label for="White">White</label><br>
                <input type="radio" id="Gray" name="Color" value="Gray">
                <label for="Gray">Gray</label>
                @error('Color')
                    <p style="color: red;">The Color field is required.</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Image" class="form-label">Shoe Image</label>
                <input type="file" class="form-control" id="Image" aria-describedby="emailHelp" name="Image" value="{{ old('Image') }}">
                @error('Image')
                    <p style="color: red;">The Image field is required.</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>