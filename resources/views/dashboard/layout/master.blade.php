<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="pub/bootstrap.css">
    <script src="pub/bootstrap.js"></script>
    <script src="pub/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="pub/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/d983eb8074.js" crossorigin="anonymous"></script>
</head>

<body>


    @yield('content')


    <script>
        $(document).ready(function() {
            $('#minimize-sidebar').click(function() {
                $('#sidebar-maximize-dash').toggleClass('d-none');
                $('#sidebar-minimize-dash').toggleClass('d-none');
            });

            $("#table-search-dash").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#candidate-body tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

        });
    </script>
</body>

</html>
