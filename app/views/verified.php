<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>

    <!-- Include Bootstrap CSS from a CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(to right, #8a2be2, #9370db); /* Gradient background */
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 600px;
            background: #ffffff; /* Semi-transparent white background */
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #8a2be2; /* Title color */
        }

        .form-label {
            color: #000000; /* Form label color */
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #8a2be2; /* Focus border color */
        }

        .btn-primary {
            background-color: #8a2be2; /* Primary button color */
            border: none;
        }

        .btn-primary:hover {
            background-color: #a67bc3; /* Hover effect */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Upload Your File</h1>
        <form action="/upload" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="fileToUpload" class="form-label">Select image to upload:</label>
                <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" class="form-control" name="subject" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" name="content" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>

        </form>
    </div>

    <!-- Include Bootstrap JS from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
