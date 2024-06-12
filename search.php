<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/style.css">
    <title>FORM</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-5 px-0 text-center">


            <h1 class="text-warning display-3 fw-bold text-center">FORM</h1>

            <form action="hotels.php" method="GET">
                <div class="row">
                    <div class="col-6">
                        <h2>PARKING</h2>

                        <select name="parking" class="form-select h-50" aria-label="Default select example">
                            <option value="0">Select parking options</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                            <option value="3">ALL</option>
                        </select>
                    </div>

                    <div class="col-6">
                        <h2>VOTE</h2>

                        <select name="vote" class="form-select h-50" aria-label="Default select example">
                            <option value="0">Select vote options</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn bg-warning fw-bold mt-4">SUBMIT</button>
            </form>


        </div>
    </div>

</body>

</html>