<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Darchula Hydropower</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        body {
            font-family: "Mulish", serif !important;
            font-weight: 400;
            font-style: normal;
        }
    </style>

    <style>
        .mylist ul {
            list-style-type: disc !important;
            padding-left: 20px;
            margin-left: 0;
        }

        .mylist li {
            padding-top: 2px;
            display: list-item !important;
        }

        .mylist ol {
            display: block;
            padding-left: 20px;
            list-style-type: decimal !important;
        }
    </style>
    <style>
        .carttable {
            border-collapse: collapse;
            width: 100%;
            text-align: left;
        }

        .carttable td {
            border: none;
            border-bottom: 1px solid #d3d3d3;
            font-size: 1rem;
        }

        .carttable th {
            border-bottom: 1px solid #d3d3d3;
            padding: 0.5rem 0.2rem;
            font-size: 1rem;
        }
    </style>
    <link rel="shortcut icon" href="{{ asset('images/saurya_pellet.png') }}">

    @include('frontend.links.script')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="font-roboto">
        {{-- <div class="z-[887] bg-white">
            @include('frontend.layout.topnav')
        </div> --}}
        <div class="sticky top-0  z-[888] ">
            @include('frontend.layout.navbar')
        </div>

        <div class="">
            @yield('body')
        </div>

        <div class="">
            @include('frontend.layout.footer')
        </div>

    </div>
</body>

</html>
