<?php
$page = 'Sign in';
include('inc/header.php');
?>
<link rel="stylesheet" href="assets/css/signin.css">

<?php include('inc/sidebar.php'); ?>
<!--first tab row start-->
<div class="col-sm-12 instant-main">
    <div class="row" style="margin-right: 0;margin-left: 0;">
        <div class="col-lg-12 col-md-12" style="width: 100%; background:#fff;">
            <div class="container">
                <div class="card">
                    <div class="parent">
                    </div>

                    <div class="main <?php if ($_GET['msg'] == 'already') {
                                        } else {
                                            echo 'active';
                                        } ?>">
                        <a href="service-provider">
                            <img class="logo_new_instant" src="assets/img/new-instant-logo.png" alt="">
                        </a>
                        <div class="content">
                            <p>Sign in to your account</p>
                        </div>
                        <form action="admin/inc/process.php?action=Signin" method="post">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div id="result" style="text-align: center;"></div>
                            <label for="Email address">Email Address</label>
                            <p class="inp-cret-accnt">
                                <input placeholder="Email" oninput="this.className = ''" name="email" required>
                            </p>
                            <label class="label-email" for="Email adress">Password</label>
                            <p class="inp-cret-accnt">
                                <input placeholder="Password" oninput="this.className = ''" name="password" type="password" required>
                            </p>
                            <button class="btn_sign_in" type="submit" id="nextBtn3" onclick="nextPre(1)">Sign
                                in</button>
                            <h3 class="title">OR</h3>
                            <a href="<?php echo $google_client->createAuthUrl(); ?>">
                                <button class="btn_sign_in" type="button" id="nextBtn4" onclick="nextPrev(1)">
                                    <img src="assets/img/2991148.png" class="google">
                                    <span>Sign in with Google</span>
                                </button>
                            </a>
                            <div class="text-center " style="padding-top: 32px;">
                                <span class=" create-workspace" style="color:#000; font-size:14px; ">
                                    Don't have an account yet?<div><span class="sign" id="signin" style="cursor: pointer;">Sign up now</span> </div>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="main <?php if ($_GET['msg'] == 'already') {
                                            echo 'active';
                                        } ?>">
                        <a href="service-provider">
                            <img class="blck-logo" src="assets/img/new-instant-logo.png" alt="">
                        </a>
                        <form method="post" action="admin/inc/process.php?action=SignUpUser">
                            <a href="service-provider">
                                <img class="logo_new_instant" src="assets/img/new-instant-logo.png" alt="">
                            </a>
                            <p class="text-center lets ">Create your account</p>

                            <label for="Email adress">Email adress</label>

                            <p class="email-new-p">
                                <input placeholder="Email" oninput="this.className = ''" name="email" id="email" type="email" class="form-control" required>
                                <input name="refertokken" id="refertokken" type="hidden" class="form-control" value="<?= $_SESSION['referid']; ?>">
                                <?php if ($_GET['msg'] == 'already') {
                                    echo '<span style="color:red;">This Email already Used, Please try to login</span>';
                                } else {
                                } ?>
                            </p>
                            <p id="result" style="color:red;"></p>
                            <label class="pass-create" for="Email adress">Password</label>
                            <p class="email-new-p"><input placeholder="Password" oninput="this.className = ''" name="password" id="password" type="password" class="form-control" required></p>
                            <button class="btn_sign_in" type="submit" id="nextBtn8">Next</button>
                            <div>
                                <div>

                                    <input type="checkbox" class="form-check-input value" id="checkbox-1" required name="agree">
                                </div>
                                <label for="checkbox-1" class="insta" style="cusrsor:pointer;">Yes, I understand and
                                    agree to instantjob's</label>
                            </div>
                            <!-----------------------------------term ands conditions---------------------------------->
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn_term_services" data-toggle="modal" data-target="#exampleModalLong" style="">
                                <span class="service">Terms of Service</span>and<span class="service">Privacy
                                    Policy.</span>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h2>Term of Services</h2>
                                            <p> Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.
                                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                                magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor fringilla.
                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                                magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor fringilla.
                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <h2>Privacy Policy</h2>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                                magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor fringilla.
                                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                                                dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                                Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus
                                                magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor fringilla.</p>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---------------------------------------term ands conditions ----------------------------->
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include('inc/footer.php'); ?>

    <script src="inc/js/instantjob.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        // Instead of using if conditions to display error messages, the messages are stored in JavaScript and added to the page dynamically using the DOM. 
        // This separates the PHP logic from the HTML and makes the code more maintainable.
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const msg = urlParams.get('msg');
        if (msg === 'fail') {
            document.querySelector('#result').innerHTML = '<p style="color:red;">Wrong Username or Password</p>';
        } else if (msg === 'notactive') {
            document.querySelector('#result').innerHTML =
                '<p style="color:red;">Your account is not active please contact Administrator!</p>';
        }
    </script>

    <script>
        const createWorkspaceButton = document.querySelector(".create-workspace");
        const nextButtons = document.querySelectorAll(".next-click");
        const backButtons = document.querySelectorAll(".back-click");
        const finishButton = document.querySelector(".finish-click");
        const mainForms = document.querySelectorAll(".main");
        const progressBarList = document.querySelectorAll(".progress-bar li");
        let formNumber = 0;

        createWorkspaceButton.addEventListener("click", handleCreateWorkspaceClick);
        nextButtons.forEach(button => button.addEventListener("click", handleNextClick));
        backButtons.forEach(button => button.addEventListener("click", handleBackClick));
        finishButton.addEventListener("click", handleFinishClick);

        function handleCreateWorkspaceClick() {
            if (!validateForm()) {
                return;
            }
            formNumber++;
            updateForm();
            progressForward();
        }

        function handleNextClick() {
            if (!validateForm()) {
                return;
            }
            formNumber++;
            updateForm();
            progressForward();
        }

        function handleBackClick() {
            formNumber--;
            updateForm();
        }

        function handleFinishClick() {
            formNumber++;
            updateForm();
            document.querySelector(".progress-bar").classList.add("d-none");
        }

        function progressForward() {
            progressBarList[formNumber].classList.add("active");
        }

        function updateForm() {
            mainForms.forEach(form => form.classList.remove("active"));
            mainForms[formNumber].classList.add("active");
        }

        function validateForm() {
            let isValid = true;
            const validateFormInputs = document.querySelectorAll(".main.active input");
            validateFormInputs.forEach(input => {
                input.classList.remove("warning");
                if (input.hasAttribute("required") && !input.value) {
                    isValid = false;
                    input.classList.add("warning");
                }
            });
            return isValid;
        }
    </script>
