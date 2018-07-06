<?php
// Stores the name of the class for hidden error messages
$HIDDEN_ERROR_CLASS = "hiddenError";
$SHOW_CONFIRMATION = "submitted";

// when the user submits a form
$submit = isset($_REQUEST["submit"]);
// Handle username
$userName = isset($_REQUEST["userName"]);
// Handle date
$date = isset($_REQUEST["date"]);
// Handle order
$order = isset($_REQUEST["order"]);
// Handle ratings
$rating_1 = isset($_REQUEST["rating_1"]);
$rating_2 = isset($_REQUEST["rating_2"]);
$rating_3 = isset($_REQUEST["rating_3"]);
$rating_4 = isset($_REQUEST["rating_4"]);
//Handle comments
$comments = isset($_REQUEST["comments"]);
//Handle email
$email = isset($_REQUEST["email"]);
$formValid;

if ($submit) {
  // log to the PHP console
  error_log("user submitted form");

  // if the date field is not empty:
  if (!empty($date)) {
    // the date is valid
    $dateValid = true;
  } else {
    // the date is not valid
    $dateValid = false;
  }

  // if the order field is not empty:
  if (!empty($order)) {
    // the order is valid
    $orderValid = true;
  } else {
    // the order is not valid
    $orderValid = false;
  }

  if ( !empty($rating_1) ) {
    $rate1Valid = true;
  } else {
    $rate1Valid = false;
  }

  if ( !empty($rating_2) ) {
    $rate2Valid = true;
  } else {
    $rate2Valid = false;
  }

  if ( !empty($rating_3) ) {
    $rate3Valid = true;
  } else {
    $rate3Valid = false;
  }

  if ( !empty($rating_4) ) {
    $rate4Valid = true;
  } else {
    $rate4Valid = false;
  }

  if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $emailValid = true;
  } else {
    $emailValid = false;
  }

  // the form is valid if the date (and rating and food and event and email) is valid.
  $formValid = $dateValid && $orderValid && $rate1Valid && $rate2Valid && $rate3Valid && $rate4Valid && $emailValid;

  // if valid, allow submission
  if ($formValid) {
    session_start();
    $_SESSION['userName'] = htmlspecialchars($userName);
    $_SESSION['date'] = htmlspecialchars($date);
    $_SESSION['order'] = htmlspecialchars($order);
    $_SESSION['rating_1'] = $rating_1;
    $_SESSION['rating_2'] = $rating_2;
    $_SESSION['rating_3'] = $rating_3;
    $_SESSION['rating_4'] = $rating_4;
    $_SESSION['comments'] = htmlspecialchars($comments);
    $_SESSION['email'] = htmlspecialchars($email);
    // redirect to submitted.php
    // header("Location: reviews.php");
    // return;
  }
} else {
  // log to the PHP console
  error_log("no form submitted");

  // no form submitted
  $dateValid = true;
  $orderValid = true;
  $rate1Valid = true;
  $rate2Valid = true;
  $rate3Valid = true;
  $rate4Valid = true;
  $emailValid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--Resizes website to browser-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Links CSS to HTML-->
  <link href="styles/all.css" type="text/css" rel="stylesheet" media="all"/>
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/clientValidation.js" type="text/javascript"></script>
  <title>Reviews</title>
</head>

<body>
  <header>
    <?php include("includes/navigation.php"); ?>
  </header>
  <div id = "popularDishes">
    <h1>Most Popular Dishes</h1>
  </div>
  <div id = "popularDishesContainer">
    <div class = "dishesContainer" id = "popularDishes_1">
      <img alt="UnagiDon" src="images/entrees.jpeg" />
      <p>Unagi Don (✿◠‿◠)</p>
    </div>
    <div class = "dishesContainer" id = "popularDishes_2">
      <img alt="chickenSalad" src="images/sideDishes.jpg" />
      <p>Chicken Salad with Tofu (^u^)</p>
    </div>
    <div class = "dishesContainer" id = "popularDishes_3">
      <img alt="nabeyakiudon" src="images/NabeyakiUdon.jpg" />
      <p>Nabeyaki Udon ლ(╹◡╹ლ)</p>
    </div>
    <div class = "dishesContainer" id = "popularDishes_4">
      <img alt="yakinikudon" src="images/YakinikuDon.jpg" />
      <p>Yakiniku Don (๑´ڡ`๑)</p>
    </div>
  </div>
  <!-- image source: Left to right
  [2]https://www.pinterest.com/tofurky/deli-slice-recipes/?lp=true
  [3]https://www.japancentre.com/en/pages/55-udon/print
  [4]https://mydailymoo.wordpress.com/tag/donburi/ -->
<div class = "confirmation <?php if ($formValid) { echo($SHOW_CONFIRMATION); } ?>">
<p>Thank you! Your review has been submitted!</p>
</div>
  <div id = "flexboxContainer">
    <form method = "post" id = "reviewForm" action = "/reviews.php" novalidate>
      <h1 id="title">Talk to Us!</h1>
      <div class = "labelAndInputContainer">
        <div class = "labelContainer">
          <label for="userName"> Username <span class = "indications">(optional)</span> </label>
        </div>
        <div class = "inputContainer">
          <input type="text" id="userName" name="userName" placeholder="User Name" value="<?php if (!isset($formValid)) { echo($userName); }?>">
        </div>
      </div>
      <div class = "labelAndInputContainer">
        <div class = "labelContainer">
          <label for="date"> Date <span class = "indications">(required)</span> </label>
        </div>
        <div class = "inputContainer">
          <input type="text" id="date" name="date" placeholder="mm/dd/yyyy" value="<?php if (!isset($formValid)) { echo($date); }?>" required>
        </div>
        <div class="errorContainer <?php if ($dateValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="dateError">
          Please enter the date you came to the restaurant.
        </div>
      </div>
      <div class = "labelAndInputContainer">
        <div class = "labelContainer">
          <label for="order"> Order <span class = "indications">(required)</span> </label>
        </div>
        <div class = "inputContainer">
          <input type="text" id="order" name="order" placeholder="e.g. Unagi Don" value="<?php if (!isset($formValid)) { echo($order); }?>" required>
        </div>
        <div class="errorContainer <?php if ($orderValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="orderError">
          Please enter what you ordered.
        </div>
      </div>
      <!-- The code for star rating is from RunJs. Source: http://runjs.cn/code/xqdzfki8 -->
      <div id = "ratingContainer">
        <fieldset class="rate">
          <legend>Taste</legend>
          <input type="radio" id="start5.1" name="rating_1" value="5" <?php if (($rating_1 == "5") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start5.1"><span></span></label>

          <input type="radio" id="start4.1" name="rating_1" value="4" <?php if (($rating_1 == "4") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start4.1"><span></span></label>

          <input type="radio" id="start3.1" name="rating_1" value="3" <?php if (($rating_1 == "3") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start3.1"><span></span></label>

          <input type="radio" id="start2.1" name="rating_1" value="2" <?php if (($rating_1 == "2") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start2.1"><span></span></label>

          <input type="radio" id="start1.1" name="rating_1" value="1" <?php if (($rating_1 == "1") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start1.1"><span></span></label>
        </fieldset>
        <div class="errorContainer <?php if ($rate1Valid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="tasteError">
          Please rate the taste of the food.
        </div>
        <fieldset class="rate">
          <legend>Cleanliness</legend>
          <input type="radio" id="start5.2" name="rating_2" value="5" <?php if (($rating_2 == "5") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start5.2"><span></span></label>

          <input type="radio" id="start4.2" name="rating_2" value="4" <?php if (($rating_2 == "4") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start4.2"><span></span></label>

          <input type="radio" id="start3.2" name="rating_2" value="3" <?php if (($rating_2 == "3") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start3.2"><span></span></label>

          <input type="radio" id="start2.2" name="rating_2" value="2" <?php if (($rating_2 == "2") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start2.2"><span></span></label>

          <input type="radio" id="start1.2" name="rating_2" value="1" <?php if (($rating_2 == "1") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start1.2"><span></span></label>
        </fieldset>
        <div class="errorContainer <?php if ($rate2Valid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="cleanlinessError">
          Please rate the cleanliness of the environment.
        </div>
        <fieldset class="rate">
          <legend>Service</legend>
          <input type="radio" id="start5.3" name="rating_3" value="5" <?php if (($rating_3 == "5") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start5.3"><span></span></label>

          <input type="radio" id="start4.3" name="rating_3" value="4" <?php if (($rating_3 == "4") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start4.3"><span></span></label>

          <input type="radio" id="start3.3" name="rating_3" value="3" <?php if (($rating_3 == "3") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start3.3"><span></span></label>

          <input type="radio" id="start2.3" name="rating_3" value="2" <?php if (($rating_3 == "2") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start2.3"><span></span></label>

          <input type="radio" id="start1.3" name="rating_3" value="1" <?php if (($rating_3 == "1") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start1.3"><span></span></label>
        </fieldset>
        <div class="errorContainer <?php if ($rate3Valid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="serviceError">
          Please rate the service.
        </div>
        <fieldset class="rate">
          <legend>Price</legend>
          <input type="radio" id="start5.4" name="rating_4" value="5" <?php if (($rating_4 == "5") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start5.4"><span></span></label>

          <input type="radio" id="start4.4" name="rating_4" value="4" <?php if (($rating_4 == "4") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start4.4"><span></span></label>

          <input type="radio" id="start3.4" name="rating_4" value="3" <?php if (($rating_4 == "3") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start3.4"><span></span></label>

          <input type="radio" id="start2.4" name="rating_4" value="2" <?php if (($rating_4 == "2") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start2.4"><span></span></label>

          <input type="radio" id="start1.4" name="rating_4" value="1" <?php if (($rating_4 == "1") && !isset($formValid)) { echo('checked'); } ?>/>
          <label for="start1.4"><span></span></label>
        </fieldset>
        <div class="errorContainer <?php if ($rate4Valid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="priceError">
          Please rate the price of the food.
        </div>
      </div>
      <div class = "labelAndInputContainer">
        <div class = "labelContainer">
          <label for="comments">Comments <span class = "indications">(optional)</span> </label>
        </div>
        <div class = "inputContainer">
          <textarea id="comments" name="comments" placeholder="Comments"><?php if (isset($comments) && !isset($formValid)) { echo($comments); }?></textarea>
        </div>
      </div>
      <div class = "labelAndInputContainer">
        <div class = "labelContainer">
          <label for="email">Your e-mail <span class = "indications">(required, won't be published)</span></label>
        </div>
        <div class = "inputContainer">
          <input type="email" id="email" name="email" placeholder="user@example.com" value="<?php if (!isset($formValid)) {  echo($email); }?>" required>
        </div>
        <div class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="emailError">
          Please enter a valid email address.
        </div>
      </div>
      <div class = "labelAndInputContainer">
        <button type="submit" name="submit">Send your review</button>
      </div>
    </form>
    <div id = "reviews">
      <h1>Reviews</h1>
      <div class = "reviewsContainer">
        <div id = "existingReviews1">
          <div class = "defaultProfilePicture">
            <img alt="profilepicture" src="images/defaultProfile.png" />
            <!-- Image source: https://www.vccircle.com/default-profile/ -->
          </div>
          <div class = "userName">
            <p>Noah G.</p>
          </div>
          <div class = "date">
            <p>8/23/2017</p>
          </div>
          <br>
          <div class = "rating">
            <p> ★ ★ ★ ★ ★ </p>
          </div>
          <div class = "order">
            <p>Order: Nabeyaki Udon</p>
          </div>
          <div class = "existing_comments">
            <p>Comments: Four stars for the food, but five stars for the service.
              As a student who lives nearby, I feel welcomed by the staff and love their wide
              selection of drinks and cuisine.</p>
            </div>
          </div>
          <div id = "existingReviews2">
            <div class = "defaultProfilePicture">
              <img alt="profilepicture" src="images/defaultProfile.png" />
            </div>
            <div class = "userName">
              <p>A James.</p>
            </div>
            <div class = "date">
              <p>7/30/2017</p>
            </div>
            <br>
            <div class = "rating">
              <p> ★ ★ ☆ ☆ ☆ </p>
            </div>
            <div class = "order">
              <p>Order: Shoyu Ramen</p>
            </div>
            <div class = "existing_comments">
              <p>Comments: Virtually no broth, and what I received was bland.
                The pork was not chasu.  It was a thin flavorless mystery meat.  I received an egg which was not molten.  I also got the Buta Kimchee.
                The sauce was good, but the pork was like leather.</p>
              </div>
            </div>
            <?php
            $userName = isset($_SESSION['userName']);
            if (empty($userName)) {
              $userName = "Anonymous";
            }
            $date = isset($_SESSION['date']);
            $order = isset($_SESSION['order']);
            $rating_1 = isset($_SESSION['rating_1']);
            $rating_2 = isset($_SESSION['rating_2']);
            $rating_3 = isset($_SESSION['rating_3']);
            $comments = isset($_SESSION['comments']);
            if (empty($comments)) {
              $comments = "No additional comments provided";
            }
            $email = isset($_SESSION['email']);

            unset($email);

            ?>
            <div id = "newReviews">
              <div class = "defaultProfilePicture">
                <?php
                echo ('<img alt="profilepicture" src="images/defaultProfile.png" />');
                ?>
              </div>
              <div class = "userName">
                <p><?php echo($userName); ?></p>
              </div>
              <div class = "date">
                <p><?php echo($date); ?></p>
              </div>
              <br>
              <div class = "rating">
                <!-- The code for echoing stars is from StackOverflow.
                Source: https://stackoverflow.com/questions/20373491/how-to-echo-star-from-my-rating-table -->
                <p>
                  <?php
                  $stars_displayed = 0;
                  $rating = ($rating_1 + $rating_2 + $rating_3 + $rating_4)/4;
                  for ($i = 0; $i < $rating; $i++){
                    $stars_displayed++;
                    echo '★ ';
                  }
                  for ($i = $stars_displayed; $i < 5; $i++){
                    echo '☆ ';
                  }
                  ?>
                </p>
              </div>
              <div class = "order">
                <p>Order: <?php echo($order); ?></p>
              </div>
              <div class = "comments">
                <p>Comments: <?php echo($comments); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

    </html>
