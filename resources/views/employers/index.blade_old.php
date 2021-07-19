<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>index</title>

    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="{{asset('css/style.css')}}">-->
    <!--<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">-->

    <style>
        .themed-grid-col {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(99, 174, 255, 0.2);
            border-bottom: 1px solid rgba(86, 61, 124, .2);
        }

        .themed-container {
            padding: .75rem;
            margin-bottom: 1.5rem;
            background-color: rgba(0, 123, 255, .15);
            border-bottom: 1px solid rgba(0, 123, 255, .2);
        }
    </style>


</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
            <div class="container">
                <a class="navbar-brand" href="#">Container</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown07">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form>
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>

                    <form action="{{ route('xml.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input class="" name="XML" type="file">
                        <button type="submit">LoadXML</button>
                    </form>

                </div>
            </div>
        </nav>
    </main>
    <!---->
    
    <div class="container">{{ $employers->links() }}</div>
    <div class="container">
        <!--<?php
        echo "<pre>";
        print_r ($employers);
        ?>-->
        <!---->
        <h2 class="mt-4">Employers</h2>
        <div class="row row-cols-1 row-cols-md-3 gx-4">
            <div class="col themed-grid-col">Name</div>
            <div class="col themed-grid-col">Department</div>
            <div class="col themed-grid-col">Salary Type</div>
            <div class="col themed-grid-col">Salary Value</div>
            <div class="col themed-grid-col">Start Date</div>
        </div>
        @foreach ($employers as $employer)
        <div class="row row-cols-1 row-cols-md-3 gx-4">
            <div class="col themed-grid-col">{{ $employer->emp_name }}</div>
            <div class="col themed-grid-col">{{ $employer->dep_name }}</div>
            <div class="col themed-grid-col">{{ $employer->salary_type }}</div>
            <div class="col themed-grid-col">{{ $employer->salary_value }}</div>
            <div class="col themed-grid-col">{{ $employer->start_date }}</div>
        </div>
        @endforeach
        <!---->

        <table class="table">
            <tr>
                <td>Name</td>
                <td>
                    <form action="">Department</form>
                </td>
                <td>Salary Type</td>
                <td>Salary Value</td>
                <td>Start Date</td>
            </tr>
            @foreach ($employers as $employer)
            <tr>
                <td>

                    {{ $employer->emp_name }}

                </td>
                <td>

                    {{ $employer->dep_name }}

                </td>
                <td>

                    {{ $employer->salary_type }}

                </td>
                <td>

                    {{ $employer->salary_value }}

                </td>

                <td>

                    {{ $employer->start_date }}

                </td>
            <tr>
                @endforeach
                </tabletable>

    </div>


</body>

</html>