<!doctype html>
<html lang="en">
    <head>
        <title>White Papers | News & Resources | IFBTA</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="news">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="news-hero">
                <div class="container">
                    <h1>News & Resources</h1>
                    <div class="news-hero__buttons">
                        <a href="news-resources.php" class="btn --white">Blog & News</a>
                        <a href="white-papers.php" class="btn --white current">White Papers</a>
                        <a href="supplier-marketplace.php" class="btn --white">Supplier Marketplace</a>
                    </div>
                </div>
            </section>
            <section class="white-papers">
                <div class="container">
                    <h2>White Papers</h2>
                    <p>With the leadership and expertise of Michael Kasavana, Director of Research and Education, and input from industry professionals, university representatives, thought-leaders, and experts, the IFBTA distributes ten compelling industry White Papers annually. Covering a wide variety of industry-specific and relevant topics, IFBTA White Papers address the challenges being faced or soon to be faced by operational managers, industry system providers, marketers, and policy administrators seeking to stay current with information on a variety of items of concern.</p>
                    <p>Recent White Paper topics have included, but are not limited to:</p>
                    <ul>
                        <li>Restaurant Revenue Management</li>
                        <li>PCI Data Security Standards</li>
                        <li>Contactless Restaurant Payments</li>
                        <li>The Value of Restaurant Loyalty Programs</li>
                        <li>Redefining the Point of Sale</li>
                        <li>Understanding Delivery Technology</li>
                        <li>Menu Engineering</li>
                    </ul>
                    <p>Members of the IFBTA receive annual White Papers as a part of their membership and can review past and current material in the member dashboard. If you are not a current member, <a href="https://ifbta.member365.com/sharingnetwork/login?redirect=https%3A%2F%2Fifbta.member365.com%2Fsharingnetwork%2Fstore" target="_blank">IFBTA White Papers can be purchased for download online</a>.</p>
                    <p>All IFBTA White Papers are created and vetted through Michael Kasavana. If you are interested in providing content or submitting subject matter for a future White Paper, Michael can be contacted at <a href="mailto:michael.kasavana@ifbta.org">michael.kasavana@ifbta.org</a> or Lauren Selman at <a href="mailto:lauren.selman@ifbta.org">lauren.selman@ifbta.org</a>.</p>
                    <script>
                        window.addEventListener("message", receiveMessage, false);
                        function receiveMessage(event) {
                            if (event.origin =="https://ifbta.member365.com") {
                                var iFrameID = document.getElementById('ampStoreFrame');
                                if (iFrameID) {
                                    var newHeight = (event.data+50)+'px';
                                    var baseStyle = 'background-color: transparent; overflow: auto; width:100%; border:0;';
                                    var newStyle = baseStyle+'height:'+newHeight+'; min-height: '+newHeight+';';
                                    iFrameID.setAttribute('style',newStyle);
                                }
                            } else {
                                return;
                            }
                        } // end receiveMessage handler function
                    </script>
                    <iframe style="background-color: transparent; overflow: auto; width:100%; border:0;height:817px; min-height: 817px;" src="https://ifbta.member365.com/publicFr/store/searchStore" sandbox="allow-same-origin allow-popups allow-scripts allow-forms allow-top-navigation" class="ampFrame" id="ampStoreFrame" name="ampStoreFrame" scrolling="no"></iframe>
                </div>
            </section>
        </main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>