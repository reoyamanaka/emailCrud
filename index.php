<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>PHP MySQL Email CRUD</h1>
        <p>Create, read, update and delete email(s) below:</p>

        <table class="table">
            <tbody>
                <?php include 'read.php'; ?>
            </tbody>
        </table>

        <form class="form-inline m-2" action="create.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" class="form-control m-2" id="email" name="email">
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>
</html>