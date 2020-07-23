<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dropzone</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.dropzonejs.com/css/dropzone.css?v=1591261882">
</head>

<body>
    <div class="container-fluid">
        <p>Dropzone</p>
        <form action="{{ url('upload-advanced') }}" class="dropzone" id="my-awesome-dropzone">
            @csrf
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('js/dropzone.js') }}"></script>
    <script src="{{ URL::asset('js/dropzone-application.js') }}"></script>
</body>

</html>
