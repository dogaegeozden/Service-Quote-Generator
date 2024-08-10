<DOCTYPE html>
<html>
    <head>
        <title>Service Quote Generator</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./styles.css" />
    </head>

    <body>

        <div id="ServicesBox">
            
            <h1 style="margin-bottom: 30px;">Services</h1>

            <div id="GridBox">

                <div>
                    <h2>Web Development</h2>
                    <ul>
                        <li>Full Stack Web Application</li>
                        <li>Responsive Design</li>
                        <li>Optimization for Search Engines</li>
                        <li>Cyber Security</li>
                        <li>Maintenance and Update</li>
                    </ul>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="sname" value="Web Development">
                        <input type="submit" name="wd-qr-btn" value="Request Free Quote">
                    </form>
                </div>

                <div>
                    <h2>Graphic Design</h2>
                    <ul>
                        <li>Marketing Colleterals including logos, posters, brochures, menu designs, and etc</li>
                        <li>Animation</li>
                        <li>Character Design</li>
                        <li>Social Media Posts</li>
                        <li>Tailored Design Solutions</li>
                    </ul>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="sname" value="Graphic Design">
                        <input type="submit" name="gd-qr-btn" value="Request Free Quote">
                    </form>
                </div>

                <div>
                    <h2>Technical Support</h2>
                    <ul>
                        <li>Expert Troubleshooting</li>
                        <li>Personalized Support</li>
                        <li>Proactive Maintenance</li>
                    </ul>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <input type="hidden" name="sname" value="Technical Support">
                        <input type="submit" name="ts-qr-btn" value="Request Free Quote">
                    </form>
                </div>

            </div>

        </div>

        <div>
            <?php

                function provideFreeQuote() {
                
                    $sname = htmlspecialchars($_POST['sname']);

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        echo "<h3>Requested Quote</h3>";
                        echo "<h4>$sname Package</h4>";

                        if (isset($_POST['wd-qr-btn'])) {

                            echo "<p>Get a comprehensive " . strtolower($sname) . " solution with our expert team!</p>";
                            echo "<p><strong>Package Includes</strong></p>";
                            echo "<ul><li>Full Stack Web Application development for a robust online presence.</li><li>Responsive Design to ensure seamless user experience across devices</li><li>Optimization for Search Engines to boost your online visibility.</li><li>Cyber Security measures to protect your website and data.</li><li>Maintenance and Update services to keep your website fresh and secure.</li></ul>";
                            echo "<p><strong>Investment: </strong>Starting from $1000</p>";
                            echo "<p><strong>Timeline: </strong>1-12 weeks</p>";
                            echo "<h4>Why Choose Us?</h4>";
                            echo "<ul><li>Expert team with 5+ years of experience in " . strtolower($sname) . ".</li><li>Proven track record of delivering successful web projects.</li><li>Personalized service to meet your unique business needs.</li><li>Ongoing support and maintenance for long-term success.</li></ul>";
                            echo "<h4>Let's Get Started!</h4>";
                            echo "<p>Contact us today to discuss your " . strtolower($sname) . " project and take the first step towards a strong online presence!</p>";
                        
                        } else if (isset($_POST['gd-qr-btn'])) {

                            echo "<p>Elevate your brand's visual identity with our expert " . strtolower($sname) . " services!</p>";
                            echo "<p><strong>Package Includes</strong></p>";
                            echo "<ul><li>Logos, Posters, Brochures, Menu Designs, and more.</li><li>Engaging motion graphics to capture your audience's attention.</li><li>Custom illustrations to bring your brand to life.</li><li>Eye-catching graphics to enhance your online presence.</li><li>Unique designs tailored to your brand's specific needs.</li></ul>";
                            echo "<p><strong>Investment: </strong>Starting from $1000</p>";
                            echo "<p><strong>Timeline: </strong>4-8 weeks</p>";
                            echo "<h4>Why Choose Us?</h4>";
                            echo "<ul><li>Expert graphic designers with 5+ years of experience.</li><li>Proven track record of delivering stunning visual designs.</li><li>Proven track record of delivering stunning visual designs.</li><li>Ongoing support and design updates for long-term success.</li></ul>";
                            echo "<h4>Let's Get Started!</h4>";
                            echo "<p>Contact us today to discuss your graphic design project and take the first step towards a visually stunning brand identity!</p>";
                        
                        } else if (isset($_POST['ts-qr-btn'])) {

                            echo "<p>Get peace of mind with our expert " . strtolower($sname) . " services!</p>";
                            echo "<p><strong>Package Includes</strong></p>";
                            echo "<ul><li>Fast and effective issue resolution.</li><li>Dedicated support tailored to your unique needs.</li><li>Regular checks to prevent issues before they arise.</li></ul>";
                            echo "<p><strong>Investment: </strong>Starting from $1000 per month</p>";
                            echo "<p><strong>Timeline: </strong>4-8 weeks</p>";
                            echo "<h4>Why Choose Us?</h4>";
                            echo "<ul><li>Expert technicians with 5+ years of experience.</li><li>Proven track record of delivering prompt and effective support.</li><li>Personalized service to meet your unique technical needs.</li><li>Ongoing support and maintenance for long-term success.</li></ul>";
                            echo "<h4>Let's Get Started!</h4>";
                            echo "<p>Contact us today to discuss your technical support needs and take the first step towards a worry-free technology experience!</p>";
                        }

                        echo "<p>dogaegeozden@gmail.com</p>";

                    }

                }

                provideFreeQuote();
            ?>
        </div>

    </body>
</html>
