<!DOCTYPE html>
<html lang="en">

<!-- head tag -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Form validation</title>
</head>

<body>
  <div class="container">
    <form action="{{ route('form-submit') }}" method="POST" class="needs-validation" novalidate>
      @csrf
      <h1 class="text-center">Form Validation</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <!-- name input -->
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
          id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') }}">

        <!-- error section -->
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <!-- email input -->
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
          id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        <!-- error section -->
        @error('email')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
        <!-- phone input -->
        <input name="phone" type="number" class="form-control @error('phone') is-invalid @enderror"
          id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('phone') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        <!-- error section -->
        @error('phone')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <!-- password input -->
        <input name="password" type="password" class="form-control @error('password') 'is-invalid' @enderror"
          id="exampleInputPassword1" value="{{ old('password') }}">

        <!-- error section -->
        @error('password')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 form-check">
        <!-- check me input -->
        <input name="check_me" type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
