<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion html</title>
</head>
<body>

    <form method="post" action="guardar" >

        @csrf
        <label for="">nombre</label>
        <input type="text" name="nombre" value="ddd">

        @error('nombre')
        <small>
            <strong>{{$message}}</strong>
        </small>
        @enderror
        <br>

        <label for="">email</label>
        <input type="text" name="email">
        @error('email')
        <small>
            <strong>{{$message}}</strong>
        </small>
        @enderror
        <br>

        <label for="">edad</label>
        <input type="text" name="edad">
        @error('edad')
        <small>
            <strong>{{$message}}</strong>
        </small>
        @enderror
        <br>

        <label for="">pasword</label>
        <input type="text" name="pass">
        @error('pass')
        <small>
            <strong>{{$message}}</strong>
        </small>
        @enderror
        <br>
        <label for="">pasword confirmation</label>
        <input type="text" name="pass_confirmation">
        @error('pass_confirmation')
        <small>
            <strong>{{$message}}</strong>
        </small>
        @enderror
        <br>
        <input type="submit" value="Enviar">

      {{-- {{$errors}} --}}

    </form>

</body>
</html>
