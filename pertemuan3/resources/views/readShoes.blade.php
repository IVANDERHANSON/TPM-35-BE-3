<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Shoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="margin-left: 50px">
        <nav>
            <a href="#">Read Shoes</a>
            <a href="/create-shoe">Create Shoe</a>
        </nav>
    
        <br><br><br>
    
        <div>
            @forelse ($shoes as $shoe)
                <div class="card" style="width: 18rem;">
                    <h3>{{ $shoe->Name }}</h3>
                    <h3>{{ $shoe->Size }}</h3>
                    <h3>{{ $shoe->Color }}</h3>
                    <img src="{{ asset('storage/'.$shoe->Image) }}" alt="Nike Air Jordan 1">
                    <div style="display: flex; justify-content: space-around; margin: 20px">
                        <a href="/edit-shoe/{{ $shoe->id }}"><button class="btn btn-primary">Edit</button></a>
                        <form action="/delete-shoe/{{ $shoe->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
                <br><br>
            @empty
                <h3>Data is empty.</h3>
            @endforelse
        </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>