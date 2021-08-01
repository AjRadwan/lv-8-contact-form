<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact Form</title>
  </head>
  <body>
      <div class="container-fluid">
          <h2 class="text-center mt-3 text-light bg-dark">Contact From Using laravel</h2>
      </div>
    
  <div class="container mt-5">
       @if (Session::has('success'))
       <div class="alert-alert-success">
        {{Session::get('success')}}
       </div>
       @endif 
    
    <form action="" method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="name" class="form-control" {{ $errors->has('name') ? 'errors' : ''}} name="name" id="name" value="{{ old('name') }}">

          @if ($errors->has('name'))
            <div class="text-danger mt-1">
               {{$errors->first('name')}} 
            </div>
            
          @endif
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" {{$errors->has('email') ? 'errors' : ''}} name="email" id="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
            <div class="text-danger mt-1">
               {{$errors->first('email')}} 
            </div>
          @endif
        </div>

        <div class="mb-3">
            <label for="Phone" class="form-label">Phone</label>
            <input type="Phone" class="form-control" {{$errors->has('phone') ? 'errors' : ''}} name="phone" id="Phone" value="{{ old('phone') }}">

            @if ($errors->has('phone'))
            <div class="text-danger mt-1">
               {{$errors->first('phone')}} 
            </div>
          @endif
          </div>
      

          <div class="mb-3">
            <label for="subject" class="form-label">subject</label>
            <input type="subject" class="form-control" {{$errors->has('subject') ? 'errors' : ''}} name="subject" id="subject" value="{{ old('subject') }}">

            @if ($errors->has('subject'))
            <div class="text-danger mt-1">
               {{$errors->first('subject')}} 
            </div>
            @endif
          </div>

          
          <div class="mb-3">
            <label for="message" class="form-label">message</label>
            <input type="message" class="form-control" {{$errors->has('message') ? 'errors' : ''}} name="message" id="message" value="{{ old('message') }}">

            @if ($errors->has('message'))
            <div class="text-danger mt-1">
               {{$errors->first('message')}} 
            </div>
            @endif
          </div>
          
         <button type="submit" class="btn btn-primary" name="send" value="submit">Submit</button>
        </form>
  
          </div>





  </div>









  


 
    




















    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>