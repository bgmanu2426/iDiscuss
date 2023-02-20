<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Signup for an iDiscuss Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/idiscuss/partials/_handleSignup.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="signupEmail">Email-id <strong style="color: red;">*</strong></label>
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted mb-3">We'll never share your email with anyone
                            else.</small>
                        <label for="signupName">Fullname<strong style="color: red;">*</strong></label>
                        <input type="text" class="form-control" id="signupName" name="signupName" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password <strong style="color: red;">*</strong></label>
                        <input type="password" class="form-control" minlength="8" id="signupPassword" name="signupPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password <strong style="color: red;">*</strong></label>
                        <input type="password" class="form-control" id="signupcPassword" minlength="8" name="signupcPassword" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Signup</button>
                </div>
            </form>
        </div>
    </div>
</div>