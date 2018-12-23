<?php
$page_title = "Contact";
include ('includes/header.html');
?>

<div id="run" class="run">
    <div class="main container">
        <h2>ABOUT RUNNER</h2>
        <img src="includes/img/bg-border2.gif" alt=""/>
        <div class="row justify-content-center">
            <div class="col-12">
                <div id="map">
                    <p>Treba da bude mapa ali nece</p>
                </div>
            </div>
        </div>
        <img src="includes/img/bg-border2.gif" alt=""/>
        <div class="titles">
            <div class="contact row justify-content-around">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <h2>ADRESS</h2>
                    <p>Here goes your address.</p>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <h2>Number</h2>
                    <p>Here goes your Number.</p>
                    <p>+123456789</p>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <h2>ADRESS</h2>
                    <p>Here goes your Email.</p>
                </div>
            </div>
            <img src="includes/img/bg-border2.gif" alt=""/>
            <div class="send_mail">
                <h2>Send e-mail</h2>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["comment"])) {
                        $body = "Name: {$_POST['name']} \n\n Coment:{$_POST['comment']}";
                        $body = wordwrap($body, 70);
                        mail("cula_84@yahoo.com", "contact from submission", "From: {$_POST['email']}");
                        echo "<p>Thank you for contacting me. I will replay some day.</p>";
                        $_POST = array();
                    } else {
                        echo "<p>Please fill out the form completely</p>";
                    }
                }
                ?>

                <Form action="contact.php" method="post">
                    <fieldset>
                        <legend>Please fill out this form to contact me.</legend>
                        <p>
                            <input placeholder="N A M E" type="text" name="name" maxlength="30" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"/>
                        </p>
                        <p>
                            <input placeholder="E - MAIL" type="email" name="email" maxlength="80" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"/>
                        </p>
                        <p>
                            <textarea placeholder="C O M M E N T" name="comment" rows="5" cols="30"><?php if (isset($_POST['comment'])) echo $_POST['comment']; ?></textarea>
                        </p>
                        <div class="button">
                            <input class="submit" type="submit" name="submit" value="SEND"/>
                        </div>
                    </fieldset>
                </Form>
            </div>
        </div>
    </div>
</div>

<?php
include ('includes/footer.html');
?>
