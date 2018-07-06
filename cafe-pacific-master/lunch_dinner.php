<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--Resizes website to browser-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Links CSS to HTML-->
  <link href="styles/all.css" type="text/css" rel="stylesheet" media="all"/>

  <title>Lunch & Dinner</title>
</head>

<body>
  <header>
    <?php include("includes/navigation.php"); ?>
  </header>
  <h1 class="menu-title">Lunch and Dinner Menu</h1>
  <h2 class="menu-caption"> ** <span class="heart">♡</span>: Recommended Dishes ** </h2>
  <h2 class="menu-caption"> ** <span class="vegetarian">V</span>: Vegetarian Dishes ** </h2>
  <div id="columnsContainer">
    <div class="menuColumns" id="drinks">
      <h1>Drinks</h1>
      <table>
        <tr>
          <td>12oz. Coke</td>
          <td>$1.55</td>
        </tr>
        <tr>
          <td>12oz. Diet Coke</td>
          <td>$1.55</td>
        </tr>
        <tr>
          <td>12oz. Coke Zero</td>
          <td>$1.55</td>
        </tr>
        <tr>
          <td>12oz Sprite</td>
          <td>$1.55</td>
        </tr>
        <tr>
          <td>12oz Cherry Coke</td>
          <td>$1.55</td>
        </tr>
        <tr>
          <td>Bottled Water</td>
          <td>$1.99</td>
        </tr>
        <tr>
          <td>Vitamin Water</td>
          <td>$1.99</td>
        </tr>
      </table>
      <img alt="coke" src="images/coke.png" />
    </div>
    <div class="menuColumns" id="sideDishes">
      <h1>Side Dishes</h1>
      <table>
        <tr>
          <td>Chicken Salad with Tofu</td>
          <td>$6.94</td>
        </tr>
        <tr>
          <td>Tofu Salad <span class="vegetarian">V</span></td>
          <td>$6.10</td>
        </tr>
        <tr>
          <td>Steamed Shrimp Dumpling</td>
          <td>$5.25</td>
        </tr>
        <tr>
          <td>Edamame <span class="vegetarian">V</span></td>
          <td>$4.95</td>
        </tr>
        <tr>
          <td>Gyoza <span class="heart">♡</span></td>
          <td>$4.95</td>
        </tr>
        <tr>
          <td>Age Tofu <span class="vegetarian">V</span></td>
          <td>$4.95</td>
        </tr>
        <tr>
          <td>Spicy Tofu <span class="vegetarian">V</span></td>
          <td>$5.25</td>
        </tr>
        <tr>
          <td>Korokke Appetizer</td>
          <td>$4.25</td>
        </tr>
      </table>
      <img alt="chickenSalad" src="images/sideDishes.jpg" />
    </div>
    <div class="menuColumns" id="noodleDishes">
      <h1>Noodle Dishes</h1>
      <table>
        <tr>
          <td>Miso Ramen</td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Shoyu Ramen <span class="heart">♡</span></td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Tempura Udon <span class="heart">♡</span></td>
          <td>$9.10</td>
        </tr>
        <tr>
          <td>Chicken Udon Noodle Soup</td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Tempura Soba</td>
          <td>$9.10</td>
        </tr>
        <tr>
          <td>Vegetable Udon Noodle Soup <span class="vegetarian">V</span></td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Kitsune Udon</td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Vegetable Yakiudon <span class="vegetarian">V</span></td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Chicken Yakiudon</td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Udon Noodle Soup<span class="heart">♡</span> <span class="vegetarian">V</span></td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Yakisoba</td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Kashiwa Soba</td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Sansai Soba <span class="heart">♡</span> <span class="vegetarian">V</span></td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Zaru Soba <span class="vegetarian">V</span></td>
          <td>$8.10</td>
        </tr>
        <tr>
          <td>Zaru Udon <span class="vegetarian">V</span></td>
          <td>$8.10</td>
        </tr>
      </table>
      <img alt="shoyuRamen" src="images/noodleDishes.png" />
    </div>
    <div class="menuColumns" id="specialEntrees">
      <h1>Special Entrees</h1>
      <table>
        <tr>
          <td>Sukiyaki <span class="heart">♡</span></td>
          <td>$11.99</td>
        </tr>
        <tr>
          <td>Seafood Sukiyaki</td>
          <td>$14.95</td>
        </tr>
        <tr>
          <td>Nabeyaki Udon</td>
          <td>$11.10</td>
        </tr>
        <tr>
          <td>Salmon Teriyaki <span class="heart">♡</span></td>
          <td>$11.99</td>
        </tr>
        <tr>
          <td>Spicy Seafood Nabe</td>
          <td>$14.95</td>
        </tr>
      </table>
      <img alt="nabeyakiUdon" src="images/specialEntrees.png" />
    </div>

    <div class="menuColumns" id="entrees">
      <h1>Entrees</h1>
      <table>
        <tr>
          <td>Japanese Curry Rice <span class="heart">♡</span> <span class="vegetarian">V</span></td>
          <td>$8.98</td>
        </tr>
        <tr>
          <td>Katsu Curry</td>
          <td>$9.70</td>
        </tr>
        <tr>
          <td>Unagi don <span class="heart">♡</span></td>
          <td>$14.58</td>
        </tr>
        <tr>
          <td>Chicken Agemono</td>
          <td>$9.70</td>
        </tr>
        <tr>
          <td>Pork Agemono</td>
          <td>$9.70</td>
        </tr>
        <tr>
          <td>Katsu Don <span class="heart">♡</span></td>
          <td>$8.98</td>
        </tr>
        <tr>
          <td>Oyako Don</td>
          <td>$8.98</td>
        </tr>
        <tr>
          <td>Buta Kimchee</td>
          <td>$8.98</td>
        </tr>
        <tr>
          <td>Yakiniku Don <span class="heart">♡</span></td>
          <td>$9.70</td>
        </tr>
        <tr>
          <td>Kaki Fry</td>
          <td>$11.99</td>
        </table>
        <img alt="unagiDon" src="images/entrees.jpeg" />
      </div>
    </div>
  </body>
  <!-- image source: Left to right, top to bottom
  [1]http://www.todayifoundout.com/index.php/2016/09/time-coke-spent-100-million-filling-cans-water-smelled-like-farts/
  [2]https://www.pinterest.com/tofurky/deli-slice-recipes/?lp=true
  [3][4]https://www.ithacatogo.com/r/451/restaurants/delivery/Japanese/Cafe-Pacific-Ithaca-->
  </html>
