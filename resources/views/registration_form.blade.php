<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <h1>Registration Form</h1>

                <form action={{route('register')}} method="post">
                    @csrf
                    <div class="m-2">
                        <label for="">
                            <input type="text" name="name" placeholder="enter name" class="form-control">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </label>
                    </div>

                    <div class="m-2">
                        <label for="">
                            <input type="text" name="email" id="" placeholder="enter email" class="form-control">
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </label>
                    </div>

                    <div class="m-2">
                        <label for="">
                            <input type="text" name="phone_number" id="" placeholder="phone number"
                                class="form-control">
                            @error('phone_number')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </label>
                    </div>

                    <div class="m-2">
                        <label for="">
                            <input type="submit" value="submit" class="form-control btn btn-primary">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>