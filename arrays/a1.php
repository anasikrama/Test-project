<?php

$language = array(2,'w','e','r','t','y','u','i','o','p');
foreach ($language as $value)
    
{
        echo $value ,"<br/>";
    
    
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Your Store</title>
<base href="http://polybazaar.in/shop/" />
<meta name="description" content="My Store" />
<link href="http://polybazaar.in/shop/image/data/cart.png" rel="icon" />
<meta name="HandheldFriendly" content="True" /><meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/bigshop/stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/bigshop/stylesheet/slideshow.css" media="screen" />
<link rel="stylesheet" type="text/css" href="catalog/view/theme/bigshop/stylesheet/carousel.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/bigshop/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="catalog/view/theme/bigshop/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/colorbox/colorbox.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/tabs.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<script type="text/javascript" src="catalog/view/theme/bigshop/js/custom.js"></script>

<script type="text/javascript" src="catalog/view/theme/bigshop/js/cloud_zoom.js"></script>

<script src="catalog/view/theme/bigshop/js/dimensions.js" type="text/javascript"></script>
<script src="catalog/view/theme/bigshop/js/autocomplete.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/bigshop/stylesheet/autocomplete.css" />
<script type="text/javascript">
$(document).ready(function() {
	$(function(){
	    setAutoComplete("filter_name", "results", "getdata.php?q=");
	});
});
</script>

<script type="text/javascript" src="catalog/view/javascript/jquery/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery.jcarousel.min.js"></script>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/default/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<link href='//fonts.googleapis.com/css?family=&v1' rel='stylesheet' type='text/css'>
	<style type="text/css">
body {    background-color: #F6F6F4;
 <b>Notice</b>: Use of undefined constant HTTP_IMAGE - assumed 'HTTP_IMAGE' in <b>/home/polybaza/public_html/shop/catalog/view/theme/bigshop/template/common/header.tpl</b> on line <b>102</b>  background-image: url("HTTP_IMAGEdata/about_kimco.jpg");
?>;
 background-position: top center;
 background-repeat: no-repeat;
 }
a.button, input.button, .box-product > div .cart a.button:hover, .box-product > div .cart input.button:hover, .product-grid > div .cart a.button:hover, .product-grid > div .cart input.button:hover, .product-list > div .cart a.button:hover, .product-info .price-tag, .product-list > div .cart input.button:hover, #header #cart .heading h4, .pagination .links b, #button-cart{
 background-color: #F15A23;
}
#header #welcome a:hover, #header .links:hover, #currency:hover, #language:hover, .box-product .price, .box-category > ul > li ul li a:hover, .list-item a:hover, .box-product .name a:hover, .product-list .name a:hover, .product-list .price, .product-grid .wishlist a:hover, .product-grid .compare a:hover, .product-list .wishlist a:hover, .product-list .compare a:hover, .pagination .links a:hover, .product-grid .price, .product-grid .name a:hover, .product-info .price, a.wishlist:hover, .product-info .review a:hover, .sitemap li a:hover, .breadcrumb a:hover{
color: #F15A23;
}
.pagination .links b, .box .box-heading span{
border-color: #F15A23;
}
  #menu{
 background-color: #444444;
}
#menu > ul > li:hover > a, #menu > ul > li > div{
 background-color: #F15A23;
}
#menu > ul > li > a, #menu > span {
 color: #FFFFFF;
}
 
		body, p { font-family:Helvetica; }

		
		.welcome, h1, h2, h3, .box .box-heading, .checkout-heading, .manufacturer-heading, #menu > ul > li > a{
			font-family:Trebuchet MS;
		}

		</style>
</head>
<body>
<div class="main-wrapper">
<div id="header"><div id="welcome">
  <form action="http://polybazaar.in/shop/index.php?route=module/language" method="post" id="language_form" enctype="multipart/form-data">
  <div id="language">
  Language   <ul>
        
    <li>
    <a title="English" onclick="$('input[name=\'language_code\']').attr('value', 'en'); $('#language_form').submit();" >
    <img src="image/flags/gb.png" alt="English" /> English    </a>
   </li>
    
        </ul>
    <input type="hidden" name="language_code" value="" />
    <input type="hidden" name="redirect" value="http://polybazaar.in/shop/index.php?route=common/home" />
  </div>
</form>
  <form action="http://polybazaar.in/shop/index.php?route=module/currency" method="post" enctype="multipart/form-data" id="currency_form">
  <div id="currency">
  Currency<ul>
    
        <li>
        
        <a title="Euro" onclick="$('input[name=\'currency_code\']').attr('value', 'EUR'); $('#currency_form').submit();">€ - Euro</a>
        
        </li>
        <li>
        
        
    <a title="INR"><b>Rs - INR</b></a>
    
        </li>
        <li>
        
        <a title="Pound Sterling" onclick="$('input[name=\'currency_code\']').attr('value', 'GBP'); $('#currency_form').submit();">£ - Pound Sterling</a>
        
        </li>
        <li>
        
        <a title="US Dollar" onclick="$('input[name=\'currency_code\']').attr('value', 'USD'); $('#currency_form').submit();">$ - US Dollar</a>
        
        </li>
        <input type="hidden" name="currency_code" value="" />
    <input type="hidden" name="redirect" value="http://polybazaar.in/shop/index.php?route=common/home" />
    
    </ul>
    </div>

</form>
  <div class="links">
  My Account  <ul>
  <li><a href="http://polybazaar.in/shop/index.php?route=account/account">My Account</a></li>
  <li><a href="http://polybazaar.in/shop/index.php?route=account/wishlist" id="wishlist-total">Wish List (0)</a></li>
  <li><a href="http://polybazaar.in/shop/index.php?route=checkout/cart">Shopping Cart</a></li>
  <li><a href="http://polybazaar.in/shop/index.php?route=checkout/checkout">Checkout</a></li>
  </ul>
  </div>
        <a href="http://polybazaar.in/shop/index.php?route=account/login">login</a> <a href="http://polybazaar.in/shop/index.php?route=account/register">create an account</a>        
  </div>
 <div id="logo"><a href="http://polybazaar.in/shop/index.php?route=common/home"><img src="http://polybazaar.in/shop/image/data/logo.png" title="Poly Bazaar" alt="Poly Bazaar" /></a></div>
  <div id="search">
    <div class="button-search"></div>
    <b>Notice</b>: Undefined variable: filter_name in <b>/home/polybaza/public_html/shop/catalog/view/theme/bigshop/template/common/header.tpl</b> on line <b>202</b>    <input type="text" id="filter_name" name="filter_name" value="" onClick="this.value = '';" onKeyDown="this.style.color = '#333';" />
      </div>
  
  <div id="cart">
  <div class="heading">
    <h4><img width="32" height="32" alt="" src="catalog/view/theme/bigshop/image/cart-bg.png"><!--Shopping Cart--></h4>
    <a><span id="cart-total">9 item(s) - Rs211,500</span></a></div>
  <div class="content">
        <div class="mini-cart-info">
      <table>
                <tr>
          <td class="image">            <a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=56"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/sony xperia Zr-47x47.png" alt="Sony Xperia ZR" title="Sony Xperia ZR" /></a>
            </td>
          <td class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=56">Sony Xperia ZR</a>
            <div>
                          </div></td>
          <td class="quantity">x&nbsp;9</td>
          <td class="total">Rs211,500</td>
          <td class="remove"><img src="catalog/view/theme/bigshop/image/remove-small.png" alt="Remove" title="Remove" onclick="(getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') ? location = 'index.php?route=checkout/cart&remove=56::' : $('#cart').load('index.php?route=module/cart&remove=56::' + ' #cart > *');" /></td>
        </tr>
                      </table>
    </div>
    <div class="mini-cart-total">
      <table>
                <tr>
          <td class="right"><b>Sub-Total:</b></td>
          <td class="right">Rs211,500</td>
        </tr>
                <tr>
          <td class="right"><b>Total:</b></td>
          <td class="right">Rs211,500</td>
        </tr>
              </table>
    </div>
    <div class="checkout"><a class="button" href="http://polybazaar.in/shop/index.php?route=checkout/cart">View Cart</a> &nbsp; <a class="button" href="http://polybazaar.in/shop/index.php?route=checkout/checkout">Checkout</a></div>
      </div>
</div>  <!--<div class="links"><a href="http://polybazaar.in/shop/index.php?route=common/home">Home</a><a href="http://polybazaar.in/shop/index.php?route=account/wishlist" id="wishlist-total">Wish List (0)</a><a href="http://polybazaar.in/shop/index.php?route=account/account">My Account</a><a href="http://polybazaar.in/shop/index.php?route=checkout/cart">Shopping Cart</a><a href="http://polybazaar.in/shop/index.php?route=checkout/checkout">Checkout</a></div>-->
</div>
<div id="menu">
<span>Menu</span>
  <ul>
  <li class="home"><a  title="Home" href="http://polybazaar.in/shop/index.php?route=common/home"><span>Home</span></a></li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=33">Mobile</a>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=18">Laptops &amp; Notebooks</a>
            <div>
                <ul>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=18_46">Macs (0)</a></li>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=18_45">Windows (0)</a></li>
                            </ul>
              </div>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25">Tab</a>
            <div>
                <ul>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_29">Mice and Trackballs (0)</a></li>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_28">Monitors (0)</a></li>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_30">Printers (0)</a></li>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_31">Scanners (0)</a></li>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_32">Web Cameras (0)</a></li>
                            </ul>
              </div>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=17">Software</a>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=24">LED &amp; CFL</a>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=20">Desktops</a>
            <div>
                <ul>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=20_26">PC (0)</a></li>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=20_27">Mac (0)</a></li>
                            </ul>
              </div>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=34">CCTV Camera</a>
            <div>
                <ul>
                                        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=34_42">test 9 (0)</a></li>
                            </ul>
              </div>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=60">Finger Print Lock</a>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=61">Video Door Phone</a>
          </li>
        <li><a href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=62">Vehicle Safety </a>
          </li>
      </ul>
</div>
<div id="container">
<div id="notification"></div><div id="column-left">
    <script type="text/javascript" src="catalog/view/theme/bigshop/js/jquery.dcjqaccordion.js"></script> 

<div class="box">

	<div class="box-heading">Categories</div>

	<div class="box-content box-category"><ul id="custom_accordion"><li class="category59"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=59">Phone Accessories</a></li><li class="category33"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=33">Mobile</a></li><li class="category18"><a class="cuuchild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=18">Laptops &amp; Notebooks</a> <span class="down"></span><ul><li class="category46"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=18_46">Macs</a></li><li class="category45"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=18_45">Windows</a></li></ul></li><li class="category25"><a class="cuuchild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25">Tab</a> <span class="down"></span><ul><li class="category29"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_29">Mice and Trackballs</a></li><li class="category28"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_28">Monitors</a></li><li class="category30"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_30">Printers</a></li><li class="category31"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_31">Scanners</a></li><li class="category32"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=25_32">Web Cameras</a></li></ul></li><li class="category17"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=17">Software</a></li><li class="category24"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=24">LED &amp; CFL</a></li><li class="category20"><a class="cuuchild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=20">Desktops</a> <span class="down"></span><ul><li class="category26"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=20_26">PC</a></li><li class="category27"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=20_27">Mac</a></li></ul></li><li class="category34"><a class="cuuchild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=34">CCTV Camera</a> <span class="down"></span><ul><li class="category42"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=34_42">test 9</a></li></ul></li><li class="category60"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=60">Finger Print Lock</a></li><li class="category61"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=61">Video Door Phone</a></li><li class="category62"><a class="nochild " href="http://polybazaar.in/shop/index.php?route=product/category&amp;path=62">Vehicle Safety </a></li></ul></div>
	
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#custom_accordion').customAccordion({
		classExpand : 'cid0',
		menuClose: false,
		autoClose: true,
		saveState: false,
		disableLink: false,		
		autoExpand: true
	});
});
</script>
    <div class="box">
  <div class="box-heading">Latest</div>
  <div class="box-content">
    <div class="box-product">
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=70"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/NOKIA LUMIA 520-60x60.jpeg" alt="NOKIA LUMINA 520" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=70">NOKIA LUMINA 520</a></div>
                <div class="price">
                    Rs7,800                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>       
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('70');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=69"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/LENOVO P770-60x60.jpg" alt="LENOVO P770" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=69">LENOVO P770</a></div>
                <div class="price">
                    Rs11,000                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>       
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('69');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=68"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/LENOVO S890-60x60.jpg" alt="LENOVO  S890" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=68">LENOVO  S890</a></div>
                <div class="price">
                    Rs12,000                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>       
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('68');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=67"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/NOKIA LUMINA 920-60x60.JPG" alt="NOKIA LUMIA 920" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=67">NOKIA LUMIA 920</a></div>
                <div class="price">
                    Rs21,000                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>       
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('67');" class="button" /></div>
      </div>
            <div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=66">NOKIA LUMIA 820</a></div>
                <div class="price">
                    Rs0                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>       
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('66');" class="button" /></div>
      </div>
          </div>
  </div>
</div>
    <div class="box">
  <div class="box-heading">Specials</div>
  <div class="box-content">
    <div class="box-product">
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=30"><img src="http://polybazaar.in/shop/image/cache/data/1602418_pbank_jpge0a449a5e46430429fbccfb4de5dae39-60x60.jpg" alt="Power Bank" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=30">Power Bank</a></div>
                <div class="price">
                    <span class="price-old">Rs1,200</span> <span class="price-new">Rs470</span>
                  </div>
                <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('30');" class="button" /></div>
      </div>
          </div>
  </div>
</div>
  </div>
 
<div id="content"><section class="flexslider">
<ul class="slides">
           <li>
      <a href="#"><img src="http://polybazaar.in/shop/image/cache/data/Intellectual-Property-930x300-920x300.jpg" alt="game" /></a>
    </li>
                <li>
      <a href="index.php"><img src="http://polybazaar.in/shop/image/cache/data/6-920x300.jpg" alt="easy" /></a>
    </li>
                <li>
      <a href="index.php"><img src="http://polybazaar.in/shop/image/cache/data/014-Jan-Long-haul-NYC-930x300-920x300.jpg" alt="Fast" /></a>
    </li>
          </ul>
  
</section>
<script type="text/javascript">
   $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade"
  });
});
  </script><div class="box">
  <div class="box-heading">Featured</div>
  <div class="box-content">
    <div class="box-product">
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=55"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/HTC-Sensation-XE-Philippines-152x152.jpg" alt="HTC sensation xe" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=55">HTC sensation xe</a></div>
                <div class="price">
                    Rs17,500                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('55');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=56"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/sony xperia Zr-152x152.png" alt="Sony Xperia ZR" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=56">Sony Xperia ZR</a></div>
                <div class="price">
                    Rs23,500                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('56');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=54"><img src="http://polybazaar.in/shop/image/cache/data/light/1391769828_599047576_1-Pictures-of--Led-bulbscfl-bulbs-152x152.jpg" alt="LED" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=54">LED</a></div>
                <div class="price">
                    Rs300                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('54');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=53"><img src="http://polybazaar.in/shop/image/cache/data/light/cfl-bulb-23-watt-250x250-152x152.jpg" alt="CFL 30 W  Spiral" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=53">CFL 30 W  Spiral</a></div>
                <div class="price">
                    Rs240                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('53');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=57"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/micromaxx1-152x152.jpg" alt="Micromax x101" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=57">Micromax x101</a></div>
                <div class="price">
                    Rs1,300                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('57');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=58"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/carbonn 101-152x152.jpg" alt="karbonnk101*" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=58">karbonnk101*</a></div>
                <div class="price">
                    Rs1,200                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('58');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=65"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/nokia lumia 720-152x152.jpg" alt="NOKIA LUMIA 720" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=65">NOKIA LUMIA 720</a></div>
                <div class="price">
                    Rs15,000                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('65');" class="button" /></div>
      </div>
            <div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=66">NOKIA LUMIA 820</a></div>
                <div class="price">
                    Rs0                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('66');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=67"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/NOKIA LUMINA 920-152x152.JPG" alt="NOKIA LUMIA 920" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=67">NOKIA LUMIA 920</a></div>
                <div class="price">
                    Rs21,000                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('67');" class="button" /></div>
      </div>
            <div>
                <div class="image"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=69"><img src="http://polybazaar.in/shop/image/cache/data/mobiles/LENOVO P770-152x152.jpg" alt="LENOVO P770" /></a></div>
                <div class="name"><a href="http://polybazaar.in/shop/index.php?route=product/product&amp;product_id=69">LENOVO P770</a></div>
                <div class="price">
                    Rs11,000                  </div>
                
        <div class="rating"><img src="catalog/view/theme/bigshop/image/stars-0.png" alt="Based on 0 reviews." /></div>
        
        <div class="cart"><input type="button" value="Add to Cart" onclick="addToCart('69');" class="button" /></div>
      </div>
          </div>
  </div>
</div>
<h1 style="display: none;">Your Store</h1>
<div id="carousel0">
  <ul class="jcarousel-skin-opencart">
        <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=7"><img src="http://polybazaar.in/shop/image/cache/data/demo/hp_logo-80x80.jpg" alt="Hewlett-Packard" title="Hewlett-Packard" /></a></li>
        <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=10"><img src="http://polybazaar.in/shop/image/cache/data/demo/sony_logo-80x80.jpg" alt="Sony" title="Sony" /></a></li>
        <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=9"><img src="http://polybazaar.in/shop/image/cache/data/demo/canon_logo-80x80.jpg" alt="Canon" title="Canon" /></a></li>
        <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=8"><img src="http://polybazaar.in/shop/image/cache/data/demo/apple_logo-80x80.jpg" alt="Apple" title="Apple" /></a></li>
        <li><a href="index.php?route=product/manufacturer/info&amp;manufacturer_id=5"><img src="http://polybazaar.in/shop/image/cache/data/demo/htc_logo-80x80.jpg" alt="HTC" title="HTC" /></a></li>
      </ul>
</div>
<script type="text/javascript"><!--
$('#carousel0 ul').jcarousel({
	vertical: false,
	visible: 5,
	scroll: 3});
//--></script></div>
</div>
</div>
<div id="footer">

 
    <div class="column">
    <h3>Information</h3>
    <ul>
            <li><a href="http://polybazaar.in/shop/index.php?route=information/information&amp;information_id=4">About Us</a></li>
            <li><a href="http://polybazaar.in/shop/index.php?route=information/information&amp;information_id=6">Delivery Information</a></li>
            <li><a href="http://polybazaar.in/shop/index.php?route=information/information&amp;information_id=3">Privacy Policy</a></li>
            <li><a href="http://polybazaar.in/shop/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
          </ul>
  </div>
    <div class="column">
    <h3>Customer Service</h3>
    <ul>
      <li><a href="http://polybazaar.in/shop/index.php?route=information/contact">Contact Us</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=account/return/insert">Returns</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=information/sitemap">Site Map</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>Extras</h3>
    <ul>
      <li><a href="http://polybazaar.in/shop/index.php?route=product/manufacturer">Brands</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=account/voucher">Gift Vouchers</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=affiliate/account">Affiliates</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=product/special">Specials</a></li>
    </ul>
  </div>
  <div class="column">
    <h3>My Account</h3>
    <ul>
      <li><a href="http://polybazaar.in/shop/index.php?route=account/account">My Account</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=account/order">Order History</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=account/wishlist">Wish List</a></li>
      <li><a href="http://polybazaar.in/shop/index.php?route=account/newsletter">Newsletter</a></li>
    </ul>
  </div>

<div class="contact">
<ul>
<li class="address">Okhla Jamia Nagar Delhi</li>

<li class="mobile">8287062433</li>

<li class="email">service@polybazaar </li>

</ul>
</div>


  <div class="social">
                                              </div>
  <div id="powered">Powered By <a href="http://www.opencart.com">OpenCart</a><br /> Poly Bazaar &copy; 2014 &nbsp;|&nbsp; Theme By <a target="_blank" href="http://harnishdesign.net">Harnish Design</a></div>
</div>
</body></html>