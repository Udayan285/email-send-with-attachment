<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1>Contact us with attachment</h1>
        <form action="{{ route('sendMail') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3"> 
              @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
              @elseif (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
            </div>
            @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
            </div>
            @error('email')
              <span style="color: red">{{ $message }}</span>
            @enderror

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
              </div>
              @error('subject')
              <span style="color: red">{{ $message }}</span>
            @enderror

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Message</label>
                <input type="textarea" name="message" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
              </div>
              @error('message')
              <span style="color: red">{{ $message }}</span>
            @enderror

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Attechment</label>
                <input type="file" name="attachment" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
              </div>
              @error('attachment')
              <span style="color: red">{{ $message }}</span>
                @enderror
            

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>