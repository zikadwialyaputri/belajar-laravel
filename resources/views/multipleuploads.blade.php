<!DOCTYPE html>
<html>
<head>
    <title>Upload Files</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload File or Images</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('uploads.store') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="file" class="form-control mb-3" name="filename[]" required multiple>

                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>
