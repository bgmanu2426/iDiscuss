<?php include 'partials/_header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>iDiscuss - Coding Forums</title>
</head>

<body>

    <div class="container my-3" style="min-height: 85vh;">
        <h1 class="text-center">Contact Form</h1>
        <div class="container col-md-6">
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="emailid">Email address <strong style="color: red;">*</strong></label>
                    <input type="email" class="form-control" name="emailid" id="emailid" placeholder="name@example.com" required>
                </div>
                <div class="form-group">
                    <label for="username">Full name</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <label for="userissue">Select issue <strong style="color: red;">*</strong></label>
                <select class="form-control" name="userissue" required>
                    <option>-- Select --</option>
                    <option>LogIn/SignUp Issue</option>
                    <option>Issue in posting question/comment</option>
                    <option>Bugs in the iDiscuss</option>
                    <option>Others</option>
                </select>
                <div class="form-group">
                    <label for="file">Upload the file</label>
                    <input type="file" class="form-control-file bg-light py-2 px-2" name="file" id="file">
                </div>
                <div class="form-group my-3">
                    <label for="query">Example textarea <strong style="color: red;">*</strong></label>
                    <textarea class="form-control" id="query" name="query" rows="4" required placeholder="Tell us about your issue...."></textarea>
                </div>
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-success mx-3">Submit</button>
            </form>
        </div>
    </div>

    <?php include 'partials/_footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
