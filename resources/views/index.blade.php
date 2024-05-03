<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dishes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
</head>

<body class="antialiased">
    <div class="col-md-6 offset-3">
        <div class="mx-auto">
            <button id="btn-step1" class="btn btn-primary">Step 1</button>
            <button id="btn-step2" class="btn btn-primary">Step 2</button>
            <button id="btn-step3" class="btn btn-primary">Step 3</button>
            <button id="btn-step4" class="btn btn-primary">Step 4</button>
        </div>
        <div class="mt-3">
            <form id="frmForm">
                <div id="step1" class="step1">@include('step1')</div>
                <div id="step2" class="step2"></div>
                <div id="step3" class="step3"></div>
                <div id="step4" class="step4"></div>
            </form>
        </div>
        <div class="mt-3 d-flex justify-content-between">
            <span>
                <button class="btn btn-primary" id="btn-prev" style="display: none;">Prev</button>
            </span>
            <button class="btn btn-primary" id="btn-next">Next</button>
        </div>
    </div>
    {{-- <script type="text/javascript" src="{{ asset('js/dishes.json') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('js/JS_Dishes.js') }}"></script>
</body>

</html>