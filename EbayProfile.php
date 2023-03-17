<?php
$configEmail = $_POST['poct'];

session_start();
$_SESSION['poct'] = $configEmail;
?>

<script>
window.onload = function (){
    var email = '<?php echo $_SESSION['poct']; ?>';

    document.getElementById('user-welcome').innerHTML = email;
}
</script>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="ebayProfile.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Welcome to eBay! | Your profile </title>
    </head>
    <body>
        <div class="header">
            <div class="header-top-section">
    
                <div class="left-tags">
                <span class="left-tags">Hi!</span><div id="user-welcome"></div>
                <span class="left-right-tags"><a href="#">Daily Deals</a><a href="#">Help & Contact</a></span>
                </div>
    
                <div class="right-tags">
                <span class="right-tags"><a href="#" class="ship-to">Ship to</a></span>
                <span class="right-tags"><a href="#" class="sell">Sell</a></span>
                <span class="right-tags" id="watchlist"><a href="#">Watchlist</a><i class="bi bi-caret-down" id="caret-down"></i></span>
                <div class="window" style="display: none;">
                    <span class="signInfo">Please <a href="#">sign in</a> to view items you are watching.
                    </span>
                </div>
                <span class="right-tags"><a href="#" id="eBay">My eBay</a><i class="bi bi-caret-down" id="caret-down"></i></span>
                <div class="myEbayWindow" style="display: none;">
                    <ul>
                        <li><a href="#">Summary</li></a>
                        <li><a href="#">Recently Viewed</li></a>
                        <li><a href="#">Bids</li></a>
                        <li><a href="#">Offers</li></a>
                        <li><a href="#">Watchlist</li></a>
                        <li><a href="#">Purchase Hisory</li></a>
                        <li><a href="#">Buy Again</li></a>
                        <li><a href="#">Selling</li></a>
                        <li><a href="#">Saved Searches</li></a>
                        <li><a href="#">Saved Sellers</li></a>
                        <li><a href="#">Messages</li></a>
                    </ul>
                </div>
                <span class="icons">
                <i class="bi bi-bell" id="bi-bell"></i>
                <div class="openWindowNotification" style="display: none;">
                <span style="
                    display: inline-block;
                    margin-top: 66px;
                    ">Please <a href="http://ebay/ebayRegister.php">sign-in</a> to view <br> notifications.</span>
                </div>
                <i class="bi bi-cart4" id="bi-cart"></i>
                <div class="openStoreWindow" style="display: none;">
                <span style="
                        position: relative;
                        top: 45px;
                    "><strong>Your cart is empty</strong> <br> Time to start shopping!</span>
                </div>
                </span>
                </div>
        </div>
    
                    <div class="headerItems">
                        <a href="http://ebay/ebay.php"><img class="imageHeader" src="pngwing.com (12).png"></a>
                            <button class="shopBtn">Shop by<br>category<i class="bi bi-caret-down" id="shopBtn-caret-down"></i></button>
                            <div class="ShopBtnWindow" style="display: none;">
                            <ul class="content-ul">
                                <div class="parent-1">
                                <h1 class="li-parent-1">
                                    <a href="#">Collectibles & art</a>
                                </h1>
                                <li><a href="#">Collectibles</a></li>
                                <li><a href="#">Antiques</a></li>
                                <li><a href="#">Sports memorabilia</a></li>
                                <li><a href="#">Art</a></li>
                                
                                <h2 class="li-parent-2">
                                    <a href="#">Electronics</a>
                                </h2>
                                <li><a href="#">Computers & tablets</a></li>
                                <li><a href="#">Cameras & photo</a></li>
                                <li><a href="#">TV, audio & surveillance</a></li>
                                <li><a href="#">Cell phones & accessories</a></li>
                                <h3 class="li-parent-3">
    
                                    <a href="#">Fashion</a>
                                </h3>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Jewelry & watches</a></li>
                                <li><a href="#">Shoes</a></li>
                                </div>
    
    
                                <div class="parent-2">
                                <h4 class="li-parent-4">
                                    <a href="#">Home & garden</a>
                                </h4>
                                <li><a href="#">Yard, garden & outdoor</a></li>
                                <li><a href="#">Crafts</a></li>
                                <li><a href="#">Home improvement</a></li>
                                <li><a href="#">Pet supplies</a></li>
                                <h5 class="li-parent-5">
                                    <a href="#">Auto Parts & Accessories</a>
                                </h5>
                                <li><a href="#">GPS & Security Devices</a></li>
                                <li><a href="#">Radar & Laser Detectors</a></li>
                                <li><a href="#">Care & Detailing</a></li>
                                <li><a href="#">Scooter Parts & Accessories</a></li>
                                <h6 class="li-parent-6">
                                    <a href="#">Musical instruments & gear</a>
                                </h6>
                                <li><a href="#">Guitar</a></li>
                                <li><a href="#">String</a></li>
                                <li><a href="#">Stage lighting & effects</a></li>
                                <li><a href="#">Pro audio equipment</a></li>
                                </div>
    
    
                                <div class="parent-3">
                                <h7 class="li-parent-7">
                                    <a href="#">Sporting goods</a>
                                </h7>
                                <li><a href="#">Outdoor sports</a></li>
                                <li><a href="#">Team sports</a></li>
                                <li><a href="#">Exercise & fitness</a></li>
                                <li><a href="#">Golf</a></li>
    
                                <h8 class="li-parent-8">
                                    <a href="#">Toys & hobbies</a>
                                </h8>
                                <li><a href="#">Radio control</a></li>
                                <li><a href="#">Kids toys</a></li>
                                <li><a href="#">Action figures</a></li>
                                <li><a href="#">Dolls & bears</a></li>
    
                                <h9 class="li-parent-9">
                                    <a href="#">Other categories</a>
                                </h9>
                                <li><a href="#">Video games & consoles</a></li>
                                <li><a href="#">Health & beauty</a></li>
                                <li><a href="#">Baby</a></li>
                                <li><a href="#">Business & industrial</a></li>
                                </div>
                            </ul>
                            </div>
                    <div class="searchInput">
                        <span><input type="search" class="src" placeholder="Search for anything"><i class="bi bi-search" id="searchIcon"></i></span>
                        <select id="All Categories" name="All Categories" style="font-size: 14px">
                            <option value="All-categories">All categories</option>
                            <option value="All-categories">Section and ferma</option>
                            <option value="All-categories">Ali babab dotme</option>
                            <option value="All-categories">Classic tara</option>
                            <option value="All-categories">Guitar</option>
                            <option value="All-categories">Your movies</option>
                            <option value="All-categories">Cake for man</option>
                            <option value="All-categories">Cake for woman</option>
                            <option value="All-categories">Language Books</option>
                            <option value="All-categories">Display Screen</option>
                            <option value="All-categories">Tom & Jerry</option>
                            <option value="All-categories">Propan Pow</option>
                            <option value="All-categories">Roaund Lakl</option>
                            <option value="All-categories">Ai Zisn column</option>
                            <option value="All-categories">Flex direction</option>
                            <option value="All-categories">Selling items</option>
                            <option value="All-categories">Buying items</option>
                            <option value="All-categories">Space wording</option>
                            <option value="All-categories">Tracks and sounds</option>
                            <option value="All-categories">Weight height and cool</option>
                            <option value="All-categories">Cold wiremap</option>
                            <option value="All-categories">All pup op window</option>
                            <option value="All-categories">Transparent wallpapers</option>
                            <option value="All-categories">Section and ferma</option>
                            <option value="All-categories">Ali babab dotme</option>
                            <option value="All-categories">Classic tara</option>
                            <option value="All-categories">Guitar</option>
                            <option value="All-categories">Your movies</option>
                            <option value="All-categories">Cake for man</option>
                            <option value="All-categories">Cake for woman</option>
                            <option value="All-categories">Language Books</option>
                            <option value="All-categories">Display Screen</option>
                            <option value="All-categories">Tom & Jerry</option>
                            <option value="All-categories">Propan Pow</option>
                            <option value="All-categories">Roaund Lakl</option>
                        </select>
                        <input type="submit" name="searchBtn" value="Search" class="BtnSearch">
                        <span class="advanced"><a href="#">Advanced</a></span>
                    </div>
                    </div>
            </div>
    
    
    
    <div class="header-down">
        <ul class="container">
            <span class="border-top"></span>
            <span class="border-bottom"></span>
    
            <div class="without-li">
    <li class="active"><a href="#">Home</a></li>
    </div>
    
    <li><a href="#"><i class="bi bi-heart-fill"></i> Saved</a></li>
    
    <li><a href="#" id="electronicsBtn">Electronics</a></li>
    <div class="electronics" style="display: none; column-gap: 50px;">
    <img src="https://ir.ebaystatic.com/cr/v/c01/ROW-19392_Fallback_Electronics_770x270.png">
        <div class="header-first">
            <h1>Most popular categories</h1>
            <ul>
                <li><a href="#">Smartphones and accessories</a></li>
                <li><a href="#">Video games and consoles</a></li>
                <li><a href="#">Computers and tablets</a></li>
                <li><a href="#">Cameras and photos</a></li>
                <li><a href="#">Camera drones</a></li>
                <li><a href="#">Refurbished</a></li>
                <li><a href="#">Smart home</a></li>
            </ul>
        </div>
    
        <div class="header-second">
            <h2>More categories</h2>
                <li><a href="#">Apple</a></li>
                <li><a href="#">Samsung</a></li>
                <li><a href="#">Electronics levels</a></li>
                <li><a href="#">Buy to pay</a></li>
                <li><a href="#">API systems</a></li>
                <li><a href="#">Database systems</a></li>
                <li><a href="#">Small eBay sell</a></li>
        </div>
    
    
    </div>
    
    <li><a href="#" id="motorsBtn">Motors</a></li>
    <div class="motors" style="display: none; column-gap: 50px;">
        <img src="https://ir.ebaystatic.com/cr/v/c01/ROW-19393_Fallback_Moda_770x270.png">
            <div class="header-first">
                <h1>Car</h1>
                <ul>
                    <li><a href="#">Smartphones and accessories</a></li>
                    <li><a href="#">Video games and consoles</a></li>
                    <li><a href="#">Computers and tablets</a></li>
                    <li><a href="#">Cameras and photos</a></li>
                    <li><a href="#">Camera drones</a></li>
                    <li><a href="#">Refurbished</a></li>
                    <li><a href="#">Smart home</a></li>
                </ul>
            </div>
        
            <div class="header-second">
                <h2>Motorcycle and more</h2>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Electronics levels</a></li>
                    <li><a href="#">Buy to pay</a></li>
                    <li><a href="#">API systems</a></li>
                    <li><a href="#">Database systems</a></li>
                    <li><a href="#">Small eBay sell</a></li>
            </div>
        
        </div>
    
    <li><a href="#" id="FashionBtn">Fashion</a></li>
    
    <div class="fashion-window" style="display: none;">
        <img src="https://ir.ebaystatic.com/cr/v/c01/ROW-19394_Fallback_Health_Beauty_770x270.png">
        <div class="left-box">
            <h1>Most popular categories</h1>
                    <ul class="left-ul">
                    <li><a href="#">Smartphones and accessories</a></li>
                    <li><a href="#">Video games and consoles</a></li>
                    <li><a href="#">Computers and tablets</a></li>
                    <li><a href="#">Cameras and photos</a></li>
                    <li><a href="#">Camera drones</a></li>
                    <li><a href="#">Refurbished</a></li>
                    <li><a href="#">Smart home</a></li>
                    </ul>
        </div>
        <div class="right-box" style="display: none;">
            <h2>More categories</h2>
            <ul class="right-ul">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Electronics levels</a></li>
                    <li><a href="#">Buy to pay</a></li>
                    <li><a href="#">API systems</a></li>
                    <li><a href="#">Database systems</a></li>
                    <li><a href="#">Small eBay sell</a></li>
            </ul>
        </div>
    </div>
    
    
    
    <li><a href="#">Collectibles Art</a></li>
    <li><a href="#">Sports</a></li>
    <li><a href="#">Health & Beauty</a></li>
    <li><a href="#">Industrial Equipment</a></li>
    <li><a href="#">Home & Garden</a></li>
    <li><a href="#">Deals</a></li>
    <li><a href="#">Sell</a></li>
        </ul>
    
        <div class="wrapper">
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" active>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="Capture.PNG" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="capture2.PNG" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
    
    
        </div>
    </div>
    
    
    <div class="marketing">
     <div class="popular-categories">
    <span class="eticetCategories">
        <a href="#">Explore Popular Categories</a>
        <a href="#" class="seeall">See all<i class="bi bi-arrow-right"></i></a>
    </span>
    
        <ul class="ul-categories">
            <div class="image1">
                <img src="https://i.ebayimg.com/images/g/o7MAAOSw1y1hoQpM/s-l200.webp">
            <li><a href="#">Sneakers</a></li>
            </div>
            <div class="image2">
                <img src="https://i.ebayimg.com/images/g/xR8AAOSwPVZfkEGQ/s-l200.webp">
            <li><a href="#">Korean beauty</a></li>
            </div>
            <div class="image3">
                <img src="https://i.ebayimg.com/images/g/ikgAAOSwWb5fkEGQ/s-l200.webp">
            <li><a href="#">Wristwatches</a></li>
            </div>
            <div class="image4">
                <img src="https://i.ebayimg.com/images/g/vJgAAOSwgYpfkEGQ/s-l200.webp">
            <li><a href="#">Fishing</a></li>
            </div>
            <div class="image5">
                <img src="https://i.ebayimg.com/images/g/8Z0AAOSwik1fkEGQ/s-l200.webp">
            <li><a href="#">Collectibles</a></li>
            </div>
            <div class="image6">
                <img src="https://i.ebayimg.com/images/g/Y7UAAOSwewJfkEGQ/s-l200.webp">
            <li><a href="#">Smartphones</a></li>
            </div>
            <div class="image7">
                <img src="https://i.ebayimg.com/images/g/mTcAAOSwPzVf4xc4/s-l200.webp">
            <li><a href="#">Sell</a></li>
            </div>
        </ul>
     </div>
    
     
    
    
    </div>
    <script src="ebayProfile.js"></script>
    </body>
    </html>