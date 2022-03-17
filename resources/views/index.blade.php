<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsletter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body class="bg-gray width:full height:full font-sans">
    
    <div class="flex">
        <div class="m-auto ">
            <h1 class="pb-12 text-2xl font-bold">
                Newsletter
            </h1>
            <form action="/subscribe" method="POST">
            @csrf
            <input type="email" name="email" id="eamil"
            placeholder="Enter Email..." class="px-4 py-4 shawdow-xl rounded-xl
            placeholder-gray-50::placeholder">
            <button class="bg-primary text-white font-bold rounded-full" type="submit">Submit</button>
        
        </form>
        </div>
    </div>
</body>
</html>