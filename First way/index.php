<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="container">
            <form action="env.php" method="post">
                <div class="mt-5">
                    <label for="url" class="form-label">URL</label>
                    <input type="text" class="form-control" id="url" aria-describedby="emailHelp" required name="url" placeholder="Enter your URL">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
    </section>

    

</body>
</html>