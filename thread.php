<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
    $result = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_posted_by = $row['thread_posted_by'];
    }
    ?>

    <?php
    $showAlert = false;
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST') {
            //Insert into comment db
            $comment = $_POST['comment'];
            $commentpostedby = $_POST['commentpostedby'];
            $comment = str_replace("<", "&lt;", $comment);
            $comment = str_replace(">", "&gt;", $comment);
            $sql = "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_posted_by`, `comment_time`) VALUES ('$comment', '$id', '$commentpostedby', current_timestamp())";
            $result = mysqli_query($connection, $sql);
            $showAlert = true;
            if ($showAlert) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your comment has been added!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                  </div>';
            }
        }
    }
    ?>

    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron py-2">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead"> <?php echo $desc; ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post questions. Remain respectful of other members at all times.</p>
            <p><b>Posted by: <em><?php echo $thread_posted_by; ?></b></em></p>
        </div>
    </div>

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        echo '<div class="container">
        <h1 class="py-2">Post a Comment</h1> 
        <form action= "' . $_SERVER['REQUEST_URI'] . '" method="post"> 
                <input type="hidden" name="commentpostedby" value ="' . $_SESSION['username'] . '">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Type your comment</label>
                <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form> 
    </div>';
    } else {
        echo '
        <div class="container">
        <h1 class="py-2">Post a Comment</h1> 
           <p class="lead">You are not logged in. Please login to be able to post comments.</p>
        </div>
        ';
    }
    ?>

    <div class="container mb-5" style="min-height: 433px;">
        <h1 class="py-2">Discussions</h1>
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
        $result = mysqli_query($connection, $sql);
        $noResult = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['comment_id'];
            $content = $row['comment_content'];
            $commentpostedby = $row['comment_posted_by'];
            $comment_time = $row['comment_time'];
            $time = new DateTime("$comment_time");
            $time->format('jS \of F Y h:i:s A');

            echo '<div class="media my-3">
            <img src="img/userdefault.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
               <p class="font-weight-bold my-0"> Commented by:- <em>' . $commentpostedby . ' (' . $time->format('jS F \, Y \a\t h:i A') . '</em>)</p> ' . $content . '
            </div>
        </div>';
        }
        // echo "this is good";
        // echo var_dump($noResult);
        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Comments Found</p>
                        <p class="lead"> Be the first person to comment</p>
                    </div>
                 </div> ';
        }

        ?>
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