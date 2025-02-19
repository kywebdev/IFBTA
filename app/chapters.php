<!doctype html>
<html lang="en">
    <head>
        <title>Chapters | IFBTA</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="chapters">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="hero">
                <div class="container">
                    <h1>Chapters</h1>
                    <h2>Below are the chapters you can join today. However, we are actively working toward adding new chapters. Interested in opening one in your local community? Get in touch!</h2>
                    <button class="btn --orange">Open a chapter</button>
                    <a href="#chapter-heading-1" class="btn --orange">See Chapters</a>
                    <div class="open-chapter-form">
                        <div class="container">
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
                                    <div class="col-12">
                                        <label for="location">Location</label>
                                        <input type="text" id="location" placeholder="Location" />
                                    </div>
                                    <div class="col-12 textarea">
                                        <label for="message">Questions?</label>
                                        <textarea id="message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" id="submit" value="Send" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hero__img">
                        <picture>
                            <source media="(max-width: 575px)" srcset="img/chapters-hero-mobile.jpg">
                            <img src="img/chapters-hero-desktop.jpg" alt="" />
                        </picture>
                    </div>
                </div>
            </section>
            <section class="chapter-list">
                <div class="accordion accordion-flush" id="chapters">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                <div class="container">
                                    <span>Atlanta</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-1.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-2.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-1">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                                <p>From late 2011 through July, 2017, Karen served as the Vice President, Information Technology for Buffalo Wild Wings. In this role, Karen was responsible for establishing the technology architecture and framework that delivered all core business information to the Buffalo Wild Wings Enterprise. She was instrumental in the development of the strategic plan that delivered a unified technology platform for over 1200 company-owned and franchised restaurants and the delivery of an enterprise service platform for the automation of data integrations.</p>
                                                <p>Prior to joining Buffalo Wild Wings, she served as the technology executive for a number of casual dine and quick service restaurant chains. Her prior history includes; CIO for Whataburger Restaurants, VP of Restaurant Information Solutions for Brinker International, Vice President of Business Systems for Advantica Restaurant Group, and Director of Retail Technology Solutions for Dunkin Brands. Karen started her career as a restaurant-level employee at Burger King. After two years in restaurant operations there, she moved into store accounting services and ultimately into various roles within the Information Systems department that helped build her technology expertise.</p>
                                            </div>
                                        </div>
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-2.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                                <p>From late 2011 through July, 2017, Karen served as the Vice President, Information Technology for Buffalo Wild Wings. In this role, Karen was responsible for establishing the technology architecture and framework that delivered all core business information to the Buffalo Wild Wings Enterprise. She was instrumental in the development of the strategic plan that delivered a unified technology platform for over 1200 company-owned and franchised restaurants and the delivery of an enterprise service platform for the automation of data integrations.</p>
                                                <p>Prior to joining Buffalo Wild Wings, she served as the technology executive for a number of casual dine and quick service restaurant chains. Her prior history includes; CIO for Whataburger Restaurants, VP of Restaurant Information Solutions for Brinker International, Vice President of Business Systems for Advantica Restaurant Group, and Director of Retail Technology Solutions for Dunkin Brands. Karen started her career as a restaurant-level employee at Burger King. After two years in restaurant operations there, she moved into store accounting services and ultimately into various roles within the Information Systems department that helped build her technology expertise.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chapter-partners">
                                        <p>Chapter Partners:</p>
                                        <div class="chapter-partners__logos">
                                            <div class="row">
                                                <div class="col-sm-3 col-6 chapter-partners__logos__logo">
                                                    <img src="img/hathway.png" alt="" />
                                                </div>
                                                <div class="col-sm-3 col-6 chapter-partners__logos__logo">
                                                    <img src="img/hughes.png" alt="" />
                                                </div>
                                                <div class="col-sm-3 col-6 chapter-partners__logos__logo">
                                                    <img src="img/oracle.png" alt="" />
                                                </div>
                                                <div class="col-sm-3 col-6 chapter-partners__logos__logo">
                                                    <img src="img/panasonic.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <div class="container">
                                    <span>Orlando</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-3.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-4.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-2">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <div class="container">
                                    <span>Charlotte</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-5.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-3">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <div class="container">
                                    <span>Chicago</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-6.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-7.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-4">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <div class="container">
                                    <span>Dallas</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-1.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-8.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-5">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                <div class="container">
                                    <span>New England</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-9.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-6">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                <div class="container">
                                    <span>Southern California</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-10.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-7">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                <div class="container">
                                    <span>Twin Cities</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-11.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-12.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-8">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                <div class="container">
                                    <span>London</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-13.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-9">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                <div class="container">
                                    <span>Vancouver</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-3.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-10">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="chapter-heading-11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                <div class="container">
                                    <span>Washington, D.C.</span>
                                    <p>Chapter Chairs</p>
                                    <div class="chapter-chairs">
                                        <ul>
                                            <li class="chapter-chair">
                                                <div class="chapter-chair__img">
                                                    <img src="img/chapter-chair-14.png" alt="" />
                                                </div>
                                                <div class="chapter-chair__info">
                                                    <span class="chapter-chair__info__name">Salen Goundar</span>
                                                    <span class="chapter-chair__info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#chapters" aria-labelledby="chapter-heading-11">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="chapter-heading">
                                        <p>Chapter Chairs</p>
                                        <a href="open-chapter.php">Open Chapter</a>
                                    </div>
                                    <div class="chapter-chairs-info">
                                        <div class="chapter-chairs-info__chair">
                                            <div class="chapter-chairs-info__chair__img">
                                                <img src="img/chapter-chair-lg-1.png" alt="" />
                                            </div>
                                            <div class="chapter-chairs-info__chair__chair-info">
                                                <div>
                                                    <span class="chapter-chairs-info__chair__chair-info__name">Salen Goundar</span>
                                                    <span class="chapter-chairs-info__chair__chair-info__title">Senior Manager, IT Service Delivery - Panago Pizza Inc.</span>
                                                </div>
                                            </div>
                                            <div class="chapter-chairs-info__chair__text">
                                                <p>Karen Bird, Chief Information Officer for Hooters of America is accountable for the strategy and execution of technology systems and services for multiple functional areas within the company. She has responsibilities for both corporate and franchised departments within the overall organization. Karen joined the Hooters of America executive team in July, 2017.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>