<!doctype html>
<html lang="en">
    <head>
        <title>Events | IFBTA</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="events">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="events-hero">
                <div class="container">
                    <h1>Find an Event Near You</h1>
                    <div class="events-hero__img">
                        <picture>
                            <source media="(max-width: 575px)" srcset="img/events-hero-mobile.jpg">
                            <img src="img/events-hero-desktop.jpg" alt="" />
                        </picture>
                    </div>
                </div>
            </section>
            <section class="events-section">
                <div class="container">
                    <div class="d-flex justify-content-end">
                        <div class="dropdown">
                            <button class="dropdown-toggle location-filter" type="button" id="location-filter" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">Filter by location</button>
                            <ul class="dropdown-menu" aria-labelledby="location-filter">
                                <button class="dropdown-item" data-filter="all">Show All</button>
                                <button class="dropdown-item" data-filter=".atlanta">Atlanta</button>
                                <button class="dropdown-item" data-filter=".orlando">Orlando</button>
                                <button class="dropdown-item" data-filter=".charlotte">Charlotte</button>
                                <button class="dropdown-item" data-filter=".chicago">Chicago</button>
                                <button class="dropdown-item" data-filter=".dallas">Dallas</button>
                                <button class="dropdown-item" data-filter=".new-england">New England</button>
                                <button class="dropdown-item" data-filter=".southern-california">Southern California</button>
                                <button class="dropdown-item" data-filter=".twin-cities">Twin Cities</button>
                                <button class="dropdown-item" data-filter=".london">London</button>
                                <button class="dropdown-item" data-filter=".vancouver">Vancouver</button>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="event-list">
                    <div class="event no-results">
                        <div class="container">
                            <p>There are no events currently scheduled in this city.</p>
                        </div>
                    </div>
                    <div class="event mix vancouver">
                        <div class="container">
                            <div class="event__date">
                                <span class="event__date__day">17</span>
                                <span class="event__date__month">July</span>
                            </div>
                            <div class="event__details">
                                <a href="event-details.php" class="event__details__title">Lorem ipsum dolor sit amet consectetur.</a>
                                <div class="event__details__desc">
                                    <p>Lorem ipsum dolor sit amet consectetur. adipiscing elit. Phasellus vel risus quis libero interdum fringilla vitae ut elit Nullam. Et harum quidem rerum facilis est et expedita distinctio t harum quidem rerum facilis est.</p>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="d-flex">
                                        <span class="event__details__day">Saturday</span>
                                        <span class="event__details__time">10 am</span>
                                    </div>
                                    <span class="event__details__place">Vancouver</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event mix new-england">
                        <div class="container">
                            <div class="event__date">
                                <span class="event__date__day">18</span>
                                <span class="event__date__month">August</span>
                            </div>
                            <div class="event__details">
                                <a href="event-details.php" class="event__details__title">Lorem ipsum dolor sit amet consectetur.</a>
                                <div class="event__details__desc">
                                    <p>At vero eosu accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="d-flex">
                                        <span class="event__details__day">Saturday</span>
                                        <span class="event__details__time">10 am</span>
                                    </div>
                                    <span class="event__details__place">New England</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event mix chicago">
                        <div class="container">
                            <div class="event__date">
                                <span class="event__date__day">21</span>
                                <span class="event__date__month">October</span>
                            </div>
                            <div class="event__details">
                                <a href="event-details.php" class="event__details__title">Et harum quidem rerum facilis est et expedita distinctio t harum quidem rerum facilis est.</a>
                                <div class="event__details__desc">
                                    <p>Et harum quidem rerum facilis est et expedita distinctio t harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor blanditiis praesentiu sit consectetur.</p>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="d-flex">
                                        <span class="event__details__day">Saturday</span>
                                        <span class="event__details__time">10 am</span>
                                    </div>
                                    <span class="event__details__place">Chicago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event mix orlando">
                        <div class="container">
                            <div class="event__date">
                                <span class="event__date__day">17</span>
                                <span class="event__date__month">July</span>
                            </div>
                            <div class="event__details">
                                <a href="event-details.php" class="event__details__title">Lorem ipsum dolor sit amet consectetur.</a>
                                <div class="event__details__desc">
                                    <p>Lorem ipsum dolor sit amet consectetur. adipiscing elit. Phasellus vel risus quis libero interdum fringilla vitae ut elit Nullam. Et harum quidem rerum facilis est et expedita distinctio t harum quidem rerum facilis est.</p>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="d-flex">
                                        <span class="event__details__day">Saturday</span>
                                        <span class="event__details__time">10 am</span>
                                    </div>
                                    <span class="event__details__place">Orlando</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event mix atlanta">
                        <div class="container">
                            <div class="event__date">
                                <span class="event__date__day">18</span>
                                <span class="event__date__month">August</span>
                            </div>
                            <div class="event__details">
                                <a href="event-details.php" class="event__details__title">Lorem ipsum dolor sit amet consectetur.</a>
                                <div class="event__details__desc">
                                    <p>At vero eosu accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="d-flex">
                                        <span class="event__details__day">Saturday</span>
                                        <span class="event__details__time">10 am</span>
                                    </div>
                                    <span class="event__details__place">Atlanta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event mix chicago">
                        <div class="container">
                            <div class="event__date">
                                <span class="event__date__day">21</span>
                                <span class="event__date__month">October</span>
                            </div>
                            <div class="event__details">
                                <a href="event-details.php" class="event__details__title">Et harum quidem rerum facilis est et expedita distinctio t harum quidem rerum facilis est.</a>
                                <div class="event__details__desc">
                                    <p>Et harum quidem rerum facilis est et expedita distinctio t harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor blanditiis praesentiu sit consectetur.</p>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="d-flex">
                                        <span class="event__details__day">Saturday</span>
                                        <span class="event__details__time">10 am</span>
                                    </div>
                                    <span class="event__details__place">Chicago</span>
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