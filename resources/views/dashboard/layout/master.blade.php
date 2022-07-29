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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger position-absolute top-0 start-50 translate-middle-x m-3" style="z-index: 2">
            <a class="position-absolute top-0 end-0 bg-transparent fs-6 border-0 text-alert-danger fw-lighter m-1"><i class="fa-solid fa-xmark fa-fw"></i></a>
            @foreach ($errors->all() as $error)
                <div id="loop-alert" class="p-2 px-4">
                    <span class="me-1">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </span>
                    <span>
                        {{ $error }}
                    </span>
                </div>
            @endforeach
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success position-absolute top-0 start-50 translate-middle-x m-3" style="z-index: 2">
            <a class="position-absolute top-0 end-0 bg-transparent fs-6 border-0 text-alert-success fw-lighter m-1"><i class="fa-solid fa-xmark fa-fw"></i></a>
            <div id="loop-alert" class="p-2 px-4">
                <span class="me-1">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </span>
                <span>
                    {{ session('success') }}
                </span>
            </div>
        </div>
    @endif

    @yield('content')


    <script>
        $(document).ready(function() {
            $('.alert a').on('click', function() {
                $(this).parent().fadeOut('slow');
            });

            $('#minimize-sidebar').click(function() {
                $('.sidebar-maximize-dash').toggleClass('d-none');
                $('.sidebar-minimize-dash').toggleClass('d-none');
            });

            $("#table-search-dash").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#candidate-body tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            var items = $("#candidate-body tr");
            var numItems = items.length;
            var perPage = 10;

            items.slice(perPage).hide();
        });
    </script>
</body>

</html>
