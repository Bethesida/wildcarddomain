<!DOCTYPE html>
<html>
<head>
    <title>Create a new program</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Create a New Domain</h1>
            <form method="POST" action="{{ route('create.program') }}">
                @csrf
                <div class="form-group">
                    <label for="domain_name">Domain Name:</label>
                    <input type="text" id="domain_name" name="domain_name" class="form-control">
                    @error('domain_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="domain_description">Domain Description:</label>
                    <textarea id="domain_description" name="domain_description" class="form-control"></textarea>
                    @error('domain_description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Create New Domain</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
