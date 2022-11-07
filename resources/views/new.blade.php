<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container pt-5">
    <h2>New Catagory</h2>

    @if(session('message'))
    <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="close" aria-hidder="true">x</button>
        {{session('message')}}
    </div>
    @endif

    <div class="row">
        <div class="col-sm-4">
            <form method="" action="/store_catagory">
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" class="form-control"
                value={{old('name')}}>

                <button class="btn btn-info mt-4">Submit</button>

            </form>
        </div>
    </div>


</div>

</body>
</html>
