<!doctype html>
<html lang="en">
    <head>
        <title>Let's Connect | IFBTA</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="contact">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="contact-hero">
                <div class="container">
                    <h1>Let's connect</h1>
                    <div class="contact-hero__info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-hero__info__addr">
                                    <div class="contact-hero__info__addr__icon">
                                        <img src="img/map.svg" alt="" />
                                    </div>
                                    <div class="contact-hero__info__addr__text">
                                        <h2>Address</h2>
                                        <address>10220 River Road, Suite 110, <br />Potomac, MD 20854</address>
                                    </div>
                                </div>
                                <div class="contact-hero__info__email">
                                    <div class="contact-hero__info__email__icon">
                                        <img src="img/mail-2.svg" alt="" />
                                    </div>
                                    <div class="contact-hero__info__email__text">
                                        <h2>Email</h2>
                                        <a href="mailto:info@ifbta.org">info@ifbta.org</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-hero__info__phone">
                                    <div class="contact-hero__info__phone__icon">
                                        <img src="img/phone.svg" alt="" />
                                    </div>
                                    <div class="contact-hero__info__phone__text">
                                        <h2>(800) 277-2017</h2>
                                        <p>available from 10:00 – 19:00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-form">
                <div class="container">
                    <h2>Send us a message for further details about any events you’re interested in.</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" id="name" placeholder="Name" />
                            </div>
                            <div class="col-md-6">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" placeholder="E-mail" />
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" placeholder="Phone" />
                            </div>
                            <div class="col-md-6">
                                <label for="company">Company</label>
                                <input type="text" id="company" placeholder="Company" />
                            </div>
                            <div class="col-12 textarea">
                                <label for="message">Message</label>
                                <textarea id="message"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" id="submit" value="Send" />
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>