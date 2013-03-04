function selectDisplayScript(typedevice) {


  var sizewindow = $(window).width();
  if (sizewindow < 979 & sizewindow > 768) {
    //________________scripts pour tablette________________________

    if (typedevice == "tablet") {
      return "tablet";
      console.log("break erreur");


    }



    return "tablet";

  } else if (sizewindow < 768) {
    //________________scripts pour mobile________________
    if (typedevice == "mobile") {


      return "mobile";
      console.log("break erreur");
    }



    console.log("test");

    return "mobile";

  } else {
    //________________script pour ecran________________

    if (typedevice == "ecran") {
      return "ecran";
      console.log("break erreur");


    }


    //effet sur la page
    var config = {
      interval: 0,
      over: function() {
        $(this).addClass("open");
      },
      timeout: 242, // number = milliseconds delay before onMouseOut    
      out: function() {
        $(this).removeClass("open");
      }
    };

    $("li.dropdown").hoverIntent(config);

    return "ecran";
  }


}


//scripts pour tous
var typeDevice = selectDisplayScript("");

$(window).resize(function() {

  typeDevice = selectDisplayScript(typeDevice);
  console.log("-" + typeDevice);

});