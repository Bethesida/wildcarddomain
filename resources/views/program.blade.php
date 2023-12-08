<!DOCTYPE html>
<html>
<head>
    <title>{{ $domain->domain_name }}</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="display-4">Your new Domain is: {{ $domain->domain_name }}</h1>
            <hr class="my-4">
            <p class="lead"><strong>Domain description:</strong> {{ $domain->domain_description }}</p>
        </div>
    </div>
</body>
</html>
