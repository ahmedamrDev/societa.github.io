 <html>
    <head>
        <title>Societa</title>
        <!-- Open Graph Tags -->
		<meta property="og:type" content="website">
		<meta property="og:title schema:name" content="Societamedia">
		<meta property="og:image schema:image" content="img/logo-blue.svg">
		<meta property="og:url schema:url" content="https://youtbedv.com">
		<meta property="og:description schema:description" content="social meia agency">
		<meta property="og:site_name" content="Societamedia">


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#224294">
    
        <link rel="stylesheet" href="css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="js/script.js"></script>
        <style type="text/css">
        	.st0{fill:#FFFFFF;}
        </style>
    </head>
    <body>
        <main id="main">
<section id="nav">
            <div class="container">
                <div class="col-xs-4 col-sm-3 "><a href="http://test.societamedia.com"><img src="img/logo-blue.svg" class="nav-logo " alt="societa"></a> </div>
                <div class=" col-sm-9 col-xs-8 pull-right"> <a href="http://test.societamedia.com"><button type="button" name="button" class="bth"><svg width="16.5px" height="13.1px" viewBox="0 0 18.5 15.1">
<g transform="translate(0,-952.36218)">
	<path class="st0" d="M0,959.9c0,0.3,0.1,0.6,0.3,0.8l5,6.3c0.5,0.6,1.3,0.6,1.8,0.2c0.5-0.4,0.6-1.3,0.2-1.8l-3.4-4.3h13.3
		c0.7,0,1.3-0.6,1.3-1.3c0-0.7-0.6-1.3-1.3-1.3H3.9l3.4-4.3c0.4-0.5,0.3-1.3-0.2-1.8c-0.5-0.5-1.4-0.3-1.8,0.2l-5,6.3
		C0.1,959.4,0,959.6,0,959.9z"/>
</g>
</svg> Back to Home
</button> </a></div>
            </div>
</section>
<section id="calculator2">
            <div class="container">
                    <div class="col-sm-12 center-block"><h1 style="color:#fff; text-align:center; margin:20px auto; line-height: 42px;">Services Calculator</h1></div>

                    <div class="col-xs-12 col-lg-4 col-sm-6 hide2 center-block">
                        <div class="calculator2">
                            <img src="img/mic.svg" alt="">
                            <h2>Social Media Markiting</h2>
                            <p>Boosting your online presence though confident and smart strategies.</p>
                            <hr class="hr-ca">
                            <div class="details">
                                <h3>How Many Platform ?</h3>
                                <input type="number" id="platform" min="0" onchange="calculateTotal()" value="0">
                                <p>(Facebook, Twitter, instagram, etc..)</p>
                             </div>


                            <div class="price">
                                <hr class="hr-ca">
                                <p>Price:</p>
                                <p style="font-size: 0.8em;color: #767676;">(Average)</p>
                                <div class="cal-center">
                                <h5 id="price1">0</h5><span>EGP</span></div>
                            </div>

                            <hr class="hr-ca">
                                <p style="margin: 0px 0;" class="text-center"><button id="talk2" class=" btn btn-try">Ask a quote.</button></p>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-4 col-sm-6 hide2 center-block">
                    <div class="calculator2">
                        <img src="img/cup.svg" alt="">
                        <h2>Applying for compitions</h2>
                        <p>Now you can accelerate your startup and take the stage in well-known competitions and entrepreneurs- support programs when you apply for competitions and accelerators programs.
</p>
                        <hr class="hr-ca" >
                        <div class="details adjust" style="margin: 30px auto;">
                            <h3>How Many Compitions ?</h3>
                            <input type="number" id="compition" style="    margin-top: -10px;" onchange="calculateTotal()" min="0"  value="0">

                         </div>


                        <div class="price">
                            <hr class="hr-ca">
                            <p>Price:</p>
                            <p style="font-size: 0.8em;color: #767676;">(Average)</p>
                            <div class="cal-center">
                            <h5 id="price2">0</h5><span>EGP</span></div>
                        </div>
                </div>
            </div>

            <div class="col-xs-12 col-lg-4 col-sm-6 talk-body center-block">
        <div class="talk-content">
                    <div class="head">
                    <h2 style="    color: #2e3d49;">Select the Services you Want </h2><div class="close"><svg width="25px" height="25px" viewBox="0 0 11 11" style="enable-background:new 0 0 11 11;">
                        <path class="st1" d="M1.6,1.6c-2.1,2.1-2.1,5.6,0,7.8s5.6,2.1,7.8,0c2.1-2.1,2.1-5.6,0-7.8C7.2-0.5,3.8-0.5,1.6,1.6z M8.9,8.9
                        	C7,10.8,4,10.8,2.1,8.9S0.2,4,2.1,2.1s4.9-1.9,6.8,0C10.8,4,10.8,7,8.9,8.9z M3.9,3.5L3.5,3.9L5,5.5L3.5,7.1l0.5,0.5L5.5,6l1.6,1.6
                        	l0.5-0.5L6,5.5l1.6-1.6L7.1,3.5L5.5,5L3.9,3.5z"/>
                        </svg></div></div>
                        <div class="row">

                                            <div id="form-messages"></div>
                                            <form id="ajax-contact" method="post" action="send_form_email.php">
                            <div class="Checkboxs">
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="Web Development">
                        <label for="styled-checkbox-1">Web Development</label>

                                        </div>
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="SEO">
                        <label for="styled-checkbox-1">SEO
                        </label>
                                        </div>
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="Video Production">
                        <label for="styled-checkbox-1">Video Production
                        </label>
                                        </div>
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="Mobile Application">
                        <label for="styled-checkbox-1">Mobile Application
                        </label>
                                        </div>
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="Branding Package">
                        <label for="styled-checkbox-1">Branding Package</label>

                                        </div>
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="Public Relations Services">
                        <label for="styled-checkbox-1">Public Relations Services
                        </label>
                                        </div>
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="Activation Campaigns">
                        <label for="styled-checkbox-1">Activation Campaigns
                        </label>
                                        </div>
                                        <div class="col-xs-12 col-md-3 col-sm-6  center-block">
                                            <input class="styled-checkbox" id="styled-checkbox-1" name="check[]" type="checkbox" value="Expanding to Europe">
                        <label for="styled-checkbox-1">Expanding to Europe
                        </label>
                </div>



                                    <div class=" col-xs-12 center-block">  <p style="    font-size: 1.5em;text-align: center;color: #2e3d49;"><b>Send us a Message , and we will call you</b></p></div>
                        <div class=" col-xs-12">
                            <div class="group">
                                <input type="text" class="input2"  id="name" name="name" style="    margin-top: 5px;" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                    <label>Name:*</label>
                              </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="group">
                                <input type="email" id="email" name="email" class="input2" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                    <label>Email:*</label>
                              </div>
                        </div>
                        <div class=" col-xs-12">
                            <div class="group">
                                <input type="text"  id="phone" name="phone" class="input2" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                    <label>Phone:*</label>
                              </div>

                        </div>

                        <div class=" col-xs-12 center-block">
                            <div class="group">
                                <textarea class="input2" name="msg" id="msg" style="height: 6rem;" required></textarea>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                    <label>Message:*</label>
                              </div>
                        </div>
                        <div class="col-md-3 col-xs-12 pull-right center-block">

                            <button type="submit" class="bth">Make a Deal !</button>
                        </div>
                        </form>



            </div>
            </div>
    </div>
                <div class="calculator2" style="background: #224294;">
                    <img src="img/question.svg" alt="">
                    <h2 style="color:#fff;">Looking For Something else ?</h2>
                    <div class="row">
                        <div class="col-xs-12  center-block" style="text-align:center">
                            <p style="color:#d2d2d2;    margin-bottom: 10px;">Actually bespoke mlkshk, tbh migas air plant raclette next level flexitarian locavore you
                                probably haven't heard of them</p>
                    </div>

                <button type="button" id="talk" class="talk">Let's Talk</button>
            </div>
        </div>

            </div>





</section>
                </main>

<script type="text/javascript">
function calculateTotal() {
    var price1,
        price2,
        platform,

            compition;
platform = document.getElementById("platform").value * 3000;

compition = document.getElementById("compition").value * 1000;


    price1 = document.getElementById("price1").innerHTML = platform;
    price2 = document.getElementById("price2").innerHTML = compition;
}
</script>

    </body>
</html>
