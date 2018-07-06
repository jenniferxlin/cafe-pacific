<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--Resizes website to browser-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Links CSS to HTML-->
  <link href="styles/all.css" type="text/css" rel="stylesheet" media="all"/>
  <!-- Load jQuery -->
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <!-- Load slideshow script-->
  <script src="scripts/slideshow.js" type="text/javascript"></script>
  <title>Home</title>
</head>

<body>
  <header>
    <?php include("includes/navigation.php"); ?>
  </header>

  <div id="slideshow">
    <h1>Welcome to Cafe Pacific!</h1>
    <h3>~ Authentic Japanese Cuisine ~</h3>
      <div id="image-container">
        <button class="slideshow-button" id="previous">◄</button>
        <!--Images taken from Cafe Pacific pages on Foursquare and Yelp:
        https://www.yelp.com/biz/cafe-pacific-ithaca
        https://foursquare.com/v/cafe-pacific/4bf2f279e5eba5933efe1d90 -->
        <img id="current-image" alt = "current-image" src="images/interior.jpg"/>
        <button class="slideshow-button" id="next">►</button>
      </div>
      <div class="buttons-container">
        <button class="dot" id="dot1"></button>
        <button class="dot" id="dot2"></button>
        <button class="dot" id="dot3"></button>
      </div>
    </div>

    <div id="blurb">
      <p>Cafe Pacific brings together East and West in the heart of Collegetown in Ithaca, New York.
        From authentic ramen to curry rice dishes, sit down for a full Japanese dinner, or stop by for a quick drink.
        Make sure to also check out our amazing cake and dessert selection!</p>
      </div>

      <div id="home-columns-container">
        <div class="home-columns" id="hours">
          <h1>— Hours —</h1>
          <table>
            <tr>
              <td>Monday</td>
              <td>10:30 AM - 12:00 AM</td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td>10:30 AM - 12:00 AM</td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td>10:30 AM - 12:00 AM<td>
                <tr>
                  <td>Thursday</td>
                  <td>10:30 AM - 12:00 AM</td>
                </tr>
                <tr>
                  <td>Friday</td>
                  <td>10:30 AM - <span class="time">1:00 AM</span></td>
                </tr>
                <tr>
                  <td>Saturday</td>
                  <td>10:30 AM - <span class="time">1:00 AM</span></td>
                </tr>
                <tr>
                  <td>Sunday</td>
                  <td>10:30 AM - 12:00 AM</td>
                </tr>
              </table>
            </div>

            <div class="home-columns" id="address">
              <h1>— Address —</h1>
                <p>114 Dryden Rd</p>
                <p>Ithaca, NY 14850</p>
              <h1>— Contact —</h1>
                <p>(607) 277-7700</p>
            </div>

            <div class="home-columns" id="moreInfo">
              <h1>— More Information —</h1>
              <table>
                <tr>
                  <td class="category">Wi-Fi Availability: </td>
                  <td>Free</td>
                </tr>
                <tr>
                  <td class="category">Outdoor Seating: </td>
                  <td>Yes</td>
                </tr>
                <tr>
                  <td class="category">Noise Level: </td>
                  <td>Average<td>
                    <tr>
                      <td class="category">Payment Method: </td>
                      <td>Cash or Credit Card (with minimum $6)</td>
                    </tr>
                  </table>
                </div>
              </div>
            </body>

            </html>
