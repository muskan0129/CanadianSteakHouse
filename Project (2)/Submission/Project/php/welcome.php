<!-- 
  authors:Manik Nagdev(c0901513)
Muskan Muskan(c0906499)
Sukhveer Singh(c0907196)
Mohammad Yameen(c0906420)--><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/welcome.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/menu.js">
        
    </script>
    <script src="../js/cart.js"></script>
    <script src="https://kit.fontawesome.com/63f4529522.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="content">
        <div class="header">
            <div class="header_grid">
                <div class="grid-item" id="current"><a href="welcome.php"><?php
                    session_start();
                    
                    // Check if user is logged in
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                        // Welcome message with user's first name
                        echo "Welcome " . $_SESSION["firstname"];
                    } else {
                        // If user is not logged in, redirect them to the login page
                        header("location: ../html/login.html");
                        exit;
                    }
                    ?></a></div>
                <div class="grid-item"><a href="../html/menu.html">MENU</a></div>
                <div class="grid-item"><a href="../html/location.html">CONTACT US</a></div>
                <div class="grid-item"><a href="../html/thelook.html">ABOUT US</a></div>
                <div class="grid-item"><a href="profle.php">PROFILE</a></div> 
                <div class="grid-item"><a href="../html/login.html">LOG OUT</a></div>
            </div>
        </div>
        <h1 class="site-title">
            <a href="/">Canadian Steak House</a>
        </h1>
        <p class="site-tagline" data-shrink-original-size="52">The West End's Open Grill</p>
        <div class="container"><a href="../html/menu.html">
        <input type="text" id="mySearch" placeholder="Search..." onkeyup="myFunction()">
            <button onclick="myFunction()"><i class="fa-solid fa-magnifying-glass fa-spin fa-spin-reverse"></i></button></a></div>
            <button onclick="viewCart()" id="cartbutton"><i class="fas fa-shopping-cart"></i> <span id="cart-count">0</span></button>
            
            <div class="categorycard">
            
            <div class="flip-card">
              <h3>SIDES</h3>
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="../img/220905_DD_Chx-Caesar-Salad_051.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
      <div class ="card">
        <p>French Onion Soup</p>
        <p>$21</p>
      </div>
      <div class ="card">
        <p>Classic Caesar Salad</p>
        <p>$25</p>
      </div><div class ="card">
        <p>Canadian Loaded Wedge Salad</p>
        <p>$24</p>
      </div>
      <div class ="card">
        <p>Fresh Burrata</p>
        <p>$38</p>
      </div><div class ="card">
        <p>
          Classic Shrimp Cocktai</p>
        <p>$46</p>
      </div><div class ="card">
        <p>Bone Marrow</p>
        <p>$29</p>
      </div><div class ="card">
        <p>
          1/2 Rack of Ribs</p>
        <p>$33</p>
      </div><div class ="card">
        <p>Chicken Liver</p>
        <p>$27</p>
      </div><div class ="card">
        <p>Oysters</p>
        <p>$38</p>
      </div>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <h3>THE GRILL</h3>
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="../img/5703_WF_PLATED_Venison_Frenched_Rib_Rack_Ginger_Sauce_Specialty_Meats.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
      <div class ="card">
        <p>
          Canadian Rib Steak</p>
        <p>$89</p>
      </div>
      <div class ="card">
        <p>New York Striploin</p>
        <p>$25</p>
      </div><div class ="card">
        <p>Bone in Filet Mignon</p>
        <p>$97</p>
      </div>
      <div class ="card">
        <p>Filet Mignon</p>
        <p>$94</p>
      </div><div class ="card">
        <p>   
Double Cut Lamb Chops</p>
        <p>$78</p>
      </div><div class ="card">
        <p>Tomahawk Pork Chop</p>
        <p>$62</p>
      </div><div class ="card">
        <p>
Roasted Chicken Suprême</p>
        <p>$56</p>
      </div><div class ="card">
        <p>Fish of the Day</p>
        <p>$58</p>
      </div><div class ="card">
        <p>Whole Fish of the Day</p>
        <p>P.A.</p>
      </div>
      </div>
    </div>
  </div>
  <div class="flip-card">
    <h3>APPETIZER</h3>
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="../img/roasted-rapini.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
      <div class ="card">
        <p>
          Béarnaise Sauce</p>
        <p>$16</p>
      </div>
      <div class ="card">
        <p>
          Peppercorn Sauce</p>
        <p>$16</p>
      </div><div class ="card">
        <p>Bone in Filet Mignon</p>
        <p>$97</p>
      </div>
      <div class ="card">
        <p>Chimichurri</p>
        <p>$16</p>
      </div><div class ="card">
        <p>Fancy Mushrooms</p>
        <p>$19</p>
      </div><div class ="card">
        <p>Vegetables of the Day</p>
        <p>$19</p>
      </div>
      </div>
    </div>
  </div>
            </div>
            <section class="category" id="apetizer">
              <h1 class="menu-title">APPETIZER</h1>
              <ul class="product-list">
                  <li class="productfull">
                      <div class="product">
                      <div class="product-image">
                          <img src="../img/french-onion-soup-fp.jpg" alt="Product Image">  
                      </div>
                      <table class="menu-table">
                          <td>
                              <p>French Onion Soup</p>
                              <p>au gratin</p>
                          </td>
                          <td class="price">
                              $21
                          </td>
                      </table>
                      </div>
                      <div class="product" id="effect" style="display: none;">
      A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
  </div>
  <div class="button">
      <button class="add-to-cart-button" onclick="addToCart('French Onion Soup', 21)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('French Onion Soup', 21)">-</button>
                          <div id="quantity" style="text-align: center; padding: 9px;"></div>
                          <button id="description-button">Description</button>
  </div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/220905_DD_Chx-Caesar-Salad_051.jpg" alt="Product Image">
                          </div>
                          
                          <table class="menu-table">
                              <td>
                                  <p>Classic Caesar Salad</p>
                                  <p>White Anchovy</p>
                              </td>
                              <td class="price">
                                  $25
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect1" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Classic Caesar Salad', 25)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Classic Caesar Salad', 25)">-</button>
                          <div id="quantity1" style="text-align: center; padding: 9px;"></div>
                      <button id="description-button1">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/merlin_171784251_9c40574a-d83f-415e-8838-414d655d9b83-superJumbo.jpg" alt="Product Image">
                          </div>
                          
                          <table class="menu-table">
                              <td>
                                  <p>Canadian Loaded Wedge Salad</p>
                                  <p>Blue Cheese</p>
                              </td>
                              <td class="price">
                                  $24
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect2" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Canadian Loaded Wedge Salad', 25)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Canadian Loaded Wedge Salad', 25)">-</button>
                      <button id="description-button2">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/tomato-burrata-salad.jpg" alt="Product Image">
                          </div>
                          
                          <table class="menu-table">
                              <td>
                                  <p>Fresh Burrata</p>
                                  <p>Tomato Salad</p>
                              </td>
                              <td class="price">
                                  $38
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect3" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Fresh Burrata', 38)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Fresh Burrata', 38)">-</button>
                      <button id="description-button3">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/PerfectPortion-ShrimpCocktail.jpg" alt="Product Image">
                          </div>
                          
                          <table class="menu-table">
                              <td>
                                  <p>Classic Shrimp Cocktail</p>
                                  <p>Spicy Cocktail Sauce</p>
                              </td>
                              <td class="price">
                                  $$46
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect4" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Classic Shrimp Cocktail', 46)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Classic Shrimp Cocktail', 46)">-</button>
                       <button id="description-button4">Discription</button></div>
                  </li>
                  
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/5703_WF_PLATED_Venison_Frenched_Rib_Rack_Ginger_Sauce_Specialty_Meats.jpg" alt="Product Image">
                          </div>
                          
                          <table class="menu-table">
                              <td>
                                  <p>1/2 Rack of Ribs</p>
                                  <p>Frank's Tangy Sauce</p>
                              </td>
                              <td class="price">
                                  $33
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect6" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Chicken Liver ', 27)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Chicken Liver', 27)">-</button>
                     <button id="description-button6">Discription</button></div>
                  </li>
                  
                  
                  
                  
              </section>
              <section class="category" id="grill">
              <h1 class="menu-title">The Grill</h1>
              <ul class="product-list">
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/rib steak.jpg" alt="Product Image">
                          </div>
                          
                          <table class="menu-table">
                              <td>
                                  <p>Canadian Rib Steak</p>
                                  <p>Bone in & Dry Aged</p>
                              </td>
                              <td class="price">
                                  $98
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect9" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Canadian Rib Steak', 98)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Canadian Rib Steak', 98)">-</button>
                      <button id="description-button9">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/New-York-Strip-Steak-Feature-Image.jpg" alt="Product Image">
                          </div>
                          
                          <table class="menu-table">
                              <td>
                                  <p>New York Striploin</p>
                                  <p>The Classic</p>
                              </td>
                              <td class="price">
                                  $89
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect10" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('New York Striploin', 89)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('New York Striploin', 89)">-</button>
                       <button id="description-button10">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/filetbonin__42074.jpg" alt="Product Image">
                          </div>
                              <table class="menu-table">
                                  <td>
                                      <p>Bone in Filet Mignon</p>
                                      <p>A Rare Treat</p>
                                  </td>
                                  <td class="price">
                                      $97
                                  </td>
                              </table>
                      </div>
                      <div class="product" id="effect11" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Bone in Filet Mignon', 97)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Bone in Filet Mignon', 97)">-</button>
                     <button id="description-button11">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/filet.jpg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Filet Mignon</p>
                                  <p>Wrapped in Bacon</p>
                              </td>
                              <td class="price">
                                  $94
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect12" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Filet Mignon', 94)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Filet Mignon', 94)">-</button>
                      <button id="description-button12">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/images.jpeg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Double Cut Lamb Chops</p>
                                  <p>Grilled to Your Liking</p>
                              </td>
                              <td class="price">
                                  $78
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect13" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Double Cut Lamb Chops', 78)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Double Cut Lamb Chops', 78)">-</button>
                      <button id="description-button13">Discription</button></div>
                  </li>
                  
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/Tomahawk-Pork-Chop-3-scaled.jpg" alt="Product Image">
                          </div>
                          <table>
                          <td>
                              <p>Tomahawk Pork Chop</p>
                              <p>Red Duroc</p>
                          </td>
                          <td class="price">
                              $62
                          </td>
                      </table>
                      </div>
                      <div class="product" id="effect15" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Tomahawk Pork Chop', 62)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Tomahawk Pork Chop', 62)">-</button>
                      <button id="description-button15">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/honey-roasted-chicken-recipe-16.jpg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Roasted Chicken Suprême</p>
                                  <p>From the Oven</p>
                              </td>
                              <td class="price">
                                  $56
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect16" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Roasted Chicken Suprême', 56)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Roasted Chicken Suprême', 56)">-</button>
                     <button id="description-button16">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/download.jpeg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Fish of the Day</p>
                                  <p>From the Grill</p>
                              </td>
                              <td class="price">
                                  $58
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect17" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Fish of the Day', 58)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Fish of the Day', 58)">-</button>
                      <button id="description-button17">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/Grilled-Whole-Red-Snapper.jpg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Whole Fish of the Day</p>
                                  <p>Served Tableside</p>
                              </td>
                              <td class="price">
                                  P.A.
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect18" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Whole Fish of the Day', 78)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Whole Fish of the Day', 78)">-</button>
                       <button id="description-button18">Discription</button></div>
                  </li>
                  
              </ul>
          </section>  
          <section class="category" id="sides"> 
              <h1 class="menu-title">Sides</h1>
              <ul class="product-list">
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/Simply-Recipes-Classic-Bearnaise-Sauce-LEAD-2-3bdc07ca94f64518b5d8c51b25c04945.jpg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Béarnaise Sauce</p>
                                  <p>Classic</p>
                              </td>
                              <td class="price">
                                  $16
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect25" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Béarnaise Sauce', 16)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Béarnaise Sauce', 16)">-</button>
                      <button id="description-button25">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/download (1).jpeg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Peppercorn Sauce</p>
                                  <p>Nice & Spicy</p>
                              </td>
                              <td class="price">
                                  $16
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect19" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Peppercorn Sauce', 16)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Peppercorn Sauce', 16)">-</button>
                       <button id="description-button19">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/236375-chef-johns-chimichurri-sauce-ddmfs-4x3-0804-2a90a0019e1840dbaf81c99eac66c26d.jpg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                          <td>
                              <p>Chimichurri</p>
                              <p>Fresh</p>
                          </td>
                          <td class="price">
                              $16
                          </td>
                      </table>
                      </div>
                      <div class="product" id="effect20" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Chimichurri', 16)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Chimichurri', 16)">-</button>
                              <button id="description-button20">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/Sauteed-Mushrooms-Web-9.jpg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Fancy Mushrooms</p>
                                  <p>Slow Roasted</p>
                              </td>
                              <td class="price">
                                  $19
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect22" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Fancy Mushrooms', 19)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Fancy Mushrooms', 19)">-</button>
                     <button id="description-button22">Discription</button></div>
                  </li>
                  <li class="productfull">
                      <div class="product">
                          <div class="product-image">
                              <img src="../img/roasted-rapini.jpg" alt="Product Image">
                          </div>
                          <table class="menu-table">
                              <td>
                                  <p>Vegetables of the Day</p>
                                  <p>From the Market</p>
                              </td>
                              <td class="price">
                                  $19
                              </td>
                          </table>
                      </div>
                      <div class="product" id="effect23" style="display: none;">
                          A classic French dish made with caramelized onions and beef stock or broth. The soup is topped with bread and cheese, then gratinéed to rich, gooey perfection. It's traditionally served in a ramekin or a ceramic crock with a handle.
                      </div>
                      <div class="button">
                          <button class="add-to-cart-button" onclick="addToCart('Vegetables of the Day', 19)">+</button>
                          <button class="add-to-cart-button" onclick="removefromcart('Vegetables of the Day', 19)">-</button>
                     <button id="description-button23">Discription</button></div>
                  </li>
                  
              </ul>
          </section>

            <div class="contact-info">
            <p class="site-location">
                <a href="//maps.google.com/maps?q=3277 Bloor Street West,Toronto, ON, M8X 1E2">
                    <span>34577 North Street West</span>
                    <span>Toronto, ON, MXX 1XX</span>
                    <span>Canada</span>
                </a>
            </p>
            <p class="phone">XXX.XXX.XXX</p>
            <p class="email" data-shrink-original-size="15" style="letter-spacing: 0.133333em;">
                <a href="mailto:Reservations@HarrysSteak.House">Reservations@CanadianSteak.House</a>
            </p>
        </div>
    </div>
    
</body>
</html>
