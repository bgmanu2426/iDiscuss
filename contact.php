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
    <?php
    /*
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //Insert into comment db
        $email = $_POST['emailid'];
        $username = $_POST['username'];
        $issue = $_POST['userissue'];
        $description = $_POST['query'];
        $file = $_POST['file'];
    }

    // SMTP username :- bgmanu2426@gmail.com
    // SMTP password :- oboustcxwpcdlgkd
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    include 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;                              //Enable verbose debug output
        $mail->isSMTP();                                   //Send using SMTP
        $mail->Host     = 'smtp.gmail.com';                //Set the SMTP server to send through
        $mail->SMTPAuth = true;                            //Enable SMTP authentication
        $mail->Username   = 'bgmanu2426@gmail.com';        //SMTP username
        $mail->Password   = 'oboustcxwpcdlgkd';            //SMTP password
        $mail->SMTPSecure = 'tls';                         //Enable implicit TLS encryption
        $mail->Port     = 465;                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, $username);
        $mail->addAddress('bgmanu2426@gmail.com');     //Add a recipient
        // $mail->setFrom('idiscuss@gmail.com', 'ManuBG');
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment($file);    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $issue;
        $mail->Body    =  $description;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo '
            <div class="alert alert-success alert-dismissible fade show align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <strong>Success!</strong> Yor form has been submitted
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          ';
    } catch (Exception $e) {
        echo '
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
            <strong>Error!</strong> Yor form cold\'nt be submitted
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      ';
    }
    $mail->smtpClose();
    */
    ?>

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