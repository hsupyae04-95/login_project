<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center" style="max-width: 600px">
        <h1 class="h3 my-4">Register</h1>
        <form action="_actions/create.php" method="post" class="mb-2">
            <input type="text" class="form-control mb-2" name="name" placeholder="Name" required>
            <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
            <input type="phone" class="form-control mb-2" name="phone" placeholder="Phone" required>
            <textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>

            <button class="btn bnt-primary w-100">Rergister</button>
        </form>

        <a href="index.php">Login</a>
    </div>
</body>
</html>