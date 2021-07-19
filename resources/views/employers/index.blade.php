<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>index</title>

    <script src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="{{asset('css/style.css')}}">-->
    <!--<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">-->

</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Departments</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown07">
                                <li><a class="dropdown-item" href="{{ route('dep.show', ['id' =>'1']) }}">Dep_ID_1</a></li>
                                <li><a class="dropdown-item" href="{{ route('dep.show', ['id' =>'2']) }}">Dep_ID_2</a></li>
                                <li><a class="dropdown-item" href="{{ route('dep.show', ['id' =>'3']) }}">Dep_ID_3</a></li>
                                <li><a class="dropdown-item" href="{{ route('dep.show', ['id' =>'4']) }}">Dep_ID_4</a></li>
                                <li><a class="dropdown-item" href="{{ route('dep.show', ['id' =>'5']) }}">Dep_ID_5</a></li>
                                <li><a class="dropdown-item" href="{{ route('dep.show', ['id' =>'6']) }}">Dep_ID_6</a></li>
                                <li><a class="dropdown-item" href="{{ route('dep.show', ['id' =>'7']) }}">Dep_ID_7</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">show all</a></li>
                            </ul>
                        </li>
                    </ul>
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


<!--<?php
echo "<pre>";
print_r ($employers);
?>-->
<!---->

<div class="container">
   <h2>Employers</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Department ID</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Salary Type</th>
                    <th scope="col">Salary Value</th>
                    <th scope="col">Start Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employers as $employer)
                <tr>
                    <td>{{ $employer->emp_name }}</td>
                    <td>{{ $employer->dep_id }}</td>
                    <td>{{ $employer->dep_name }}</td>
                    <td>{{ $employer->salary_type }}</td>
                    <td>{{ $employer->salary_value }}</td>
                    <td>{{ $employer->start_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!---->
<div class="container">{{ $employers->links() }}</div>
</body>
