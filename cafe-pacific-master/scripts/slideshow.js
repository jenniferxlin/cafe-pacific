window.onload = function() {
  //array of images
  var images = ["images/interior.jpg", "images/meal.jpg", "images/snacks.jpg"];

  //current image index
  var currentImage = 0;

  //When press previous button
  $("#previous").click(function() {
    if (currentImage > 0) {
    //If not first image, go to previous image
      currentImage = currentImage - 1;
      $("#current-image").attr("src", images[currentImage]);
    } else if (currentImage == 0) {
    //If on first image of slideshow, go to the last image
      currentImage = images.length - 1;
      $("#current-image").attr("src", images[currentImage]);
    }
  });

    //When press next button
    $("#next").click(function() {
      if(currentImage < images.length - 1) {
      //If not last image, go to next image
        currentImage = currentImage + 1;
        $("#current-image").attr("src", images[currentImage]);
      } else if (currentImage == images.length - 1) {
      //If on last image, go back to first image
        currentImage = 0;
        $("#current-image").attr("src", images[currentImage]);
      }
    });

    $("#dot1").click(function() {
      $("#current-image").attr("src", images[0]);
    });

    $("#dot2").click(function() {
      $("#current-image").attr("src", images[1]);
    });

    $("#dot3").click(function() {
      $("#current-image").attr("src", images[2]);
    });
  };
