<?php include "components.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php head_tag(); ?>
    <title>Imperial Wellness | Register</title>
</head>

<body>
    <?php navbar("dark", "toggler-white"); ?>

    <!-- REGISTER-START -->
    <section id="register-start" class="navbar-margin">
        <div class="container">
            <h1>Register <span class="pri">now</span></h1>
        </div>
    </section>
    <img src="./images/designs/curve4.svg" alt="" class="curve4">
    <!-- REGISTER-START -->

    <section id="register">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4">
                    <center>
                        <img data-aos="fade-up" data-aos-delay="200" src="./images/additi3.png" class="img-fluid"
                            alt="">
                    </center>
                </div>
                <div class="col-lg-8">
                    <h3 data-aos="fade-up">Let's Get Started</h3>
                    <p data-aos="fade-up" data-aos-delay="200" class="mb-5"><span class="pri-bold">Congratulations on
                            taking the First
                            Step!</span><br />90%
                        of people just hope and wish,
                        never
                        taking any
                        ACTION.
                        I’m excited you’re giving me the opportunity to be your Results Coach. If you are looking just
                        for more energy, or to
                        completely transform your life and the people around you,<br />I am excited to help you Every
                        Step
                        of the Way.</p>
                    <form action="email" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="mx-4 mb-4">
                                        <input type="text" name="fname" placeholder="First Name" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mx-4 mb-4">
                                        <input type="text" name="lname" placeholder="Last Name" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="mx-4 mb-4">
                                        <input type="email" name="email" placeholder="Email" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mx-4 mb-4">
                                        <input type="text" name="phone" placeholder="Phone Number (+91 9876 543 210)"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="mx-4 mb-4">
                                        <input type="text" name="country" placeholder="Country" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mx-4 mb-4">
                                        <input type="text" name="state" placeholder="State" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mx-4 mb-4">
                                <h3>Taken Herbalife before</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mx-4 mb-4">
                                <input class="radiocheck" type="radio" name="herbalife" id="exampleRadios2" value="yes"
                                    checked>
                                <label for="exampleRadios2">
                                    Yes
                                </label>
                                <input class="radiocheck" type="radio" name="herbalife" id="exampleRadios1" value="no">
                                <label for="exampleRadios1">
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="mx-4">
                            <input type="submit" value="Submit" class="iw-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php footer(); ?>

    <?php scripts(); ?>
</body>

</html>