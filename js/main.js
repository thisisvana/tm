$(function() {

  $('.mobile-menu').click(function(){

    $('.main-menu').toggle(400);
  });
});

//Slider for testimonilas start here

//Get an array of sliders
var slides = document.getElementsByClassName("testimonials-block");


//Hide all slides, except the first when the page is loaded
for (var i = 0; i < slides.length; i++) {
  if(i !== 0) {
  slides[i].style.display = "none";
  }
}


//Slide Function
var index = 0;
function showTestimonials(n) {

  index=index + n;

  if(index > slides.length - 1) {
      index = 0;
  }

  if(index < 0) {
      index = slides.length - 1;
  }

  for (var i = 0; i < slides.length; i++) {
      if (i === index) {
          slides[i].style.display = "block";
      }
      else {
          slides[i].style.display = "none";
      }
  }


} //Slider testimonilas ends here

var slideIndex = 0;
var slideshow=setInterval(carousel, 3000);// Change image every 3 seconds
var images = document.getElementsByClassName("mySlides");
var i;

for (i = 0; i < images.length; i++) {
     if(i === images.length -1) {
       images[i].style.display = "block";
     } else {
       images[i].style.display = "none";
     }
}
// $("#hide").click(function(){
//     $("p").hide();
// });
//
// $("#show").click(function(){
//     $("p").show();
// });
//
//
// // Main image carousel
// $(document).ready(function(){
// 	$(".slider > div:gt(0)").hide();
//
// 		 var carouselInt = '';
//
// 	   var carouDiv = function(){
// 	    carouselInt = setInterval(function() {
// 	      $('.slider > div:first')
// 	        .fadeOut(500)
// 	        .next()
// 	        .fadeIn(500)
// 	        .end()
// 	        .appendTo('.slider');
// 	    },3000);
// 	};
//
// 	$(carouDiv());//Initialise the carousel function
//
// 	$(".slider").hover(function(){//Stop the carousel on hover
// 	 clearInterval(carouselInt);
// 	  },function(){
// 	  carouDiv();
// 	});
//
//
//
// 	//Direction Arrow links
// 	$(".button-sales").click(function(){
// 		$(".header").fadeOut(800);
// 		$(".sales").animate({opacity:"show"},800);
// 	});
// 	$(".button-modern").click(function(){
// 		$(".header").fadeOut(800);
// 		$(".modern").animate({opacity:"show"},800);
// 	});
// 	$(".button-antique").click(function(){
// 		$(".header").fadeOut(800);
// 		$(".antique").animate({opacity:"show"},800);
// 	});
// });
//
//
// (function($){
// 	function floatLabel(inputType){
// 		$(inputType).each(function(){
// 			var $this = $(this);
// 			// on focus add cladd active to label
// 			$this.focus(function(){
// 				$this.next().addClass("active");
// 			});
// 			//on blur check field and remove class if needed
// 			$this.blur(function(){
// 				if($this.val() === '' || $this.val() === 'blank'){
// 					$this.next().removeClass();
// 				}
// 			});
// 		});
// 	}
// 	// just add a class of "floatLabel to the input field!"
// 	floatLabel(".floatLabel");
// })(jQuery);
//
// var html = $('html'),
//     demo = $('.demo'),
// 		modal = $('.modal'),
//     modalShow = $('.modal-show'),
//     modalHide = $('.modal-hide'),
//     modalWrapper = $('.modal-wrapper');
//
// // Modal Show
// modalShow.on('click', function(e) {
//   // e.preventDefault();
//   html.addClass('no-scroll');
//   modal.addClass('is-visible');
//   demo.attr('aria-hidden', 'true');
//   modal.attr({
//     'aria-hidden': 'false',
//     'open': 'true',
//     'tabindex': '0'
//   });
// });
//
// // Modal Hide
// modalHide.on('click', function(e) {
//   // e.preventDefault();
//   html.removeClass('no-scroll');
//   modal.removeClass('is-visible');
//   demo.attr('aria-hidden', 'false');
//   modal.attr('aria-hidden', 'true');
//   modal.removeAttr('open tabindex');
// });
//
// //Prevent toggle event from bubbling
// modalWrapper.on('click', function(e) {
//   e.stopPropagation();
// });
//
//
// $('.img-container').click(function(){
//   $(this).addClass('showImg');
//   $(this).click(function(){
//     $(this).removeClass('showImg');
//   });
// });
//
// // this varieble is current color of province //
//      var mapSelected = "";
//
//  // when user mouse over on province, the province's color will change depend on
//  // corrent color
//      $("path").mouseover(function () {
//          hoverRefresh();
//  // if current province color is not red
//  // province color is blue
//          if ($(this).css("fill") != "rgb(255, 0, 0)") {
//              $(this).css("fill", "rgb(188, 30, 188)");
//          }
//      });
//
//  // when user mouse out from province map, all province color will be white
//      $("path").mouseout(function () {
//          hoverRefresh();
//      });
//
//
//
//  // When you click province, change color to red //
//      $("path").click(function () {
//          refreshMap();
//  // get province name
//          $("#pro-name").text($(this).data("name"));
//          loadDoc($(this).data("name"));
//  // then user click, province color change to red
//          $(this).css("fill", "rgb(255, 0, 0");
//  // and modal box comes out
//          $("#modalBox").fadeIn(250);
//          mapSelected = $(this).data("name");
//      });
//
//  //////////////////////////////////////////////
//
//  ///////////////////////////////////////////
//
//  // modal box fade out //
//
//      $("#modalBox").click(function () {
//          $("#modalBox").fadeOut(250);
//          refreshMap();
//      });
//  /////////////////////////////////////////////
//
//  // refresh province color,red to white //
//
//      function refreshMap() {
//          mapSelected = "";
//          $("path").each(function () {
//              $(this).css("fill", "white");
//          });
//      }
//  ////////////////////////////////////
//
//  // when user hover out, province color will change to white //
//      function hoverRefresh() {
//          $("path").each(function () {
//              if ($(this).data("name") != mapSelected) {
//                  $(this).css("fill", "white");
//              }
//          });
//      }
//  ////////////////////////////////////////////
//
//  // get MP info from XML
//      function loadDoc(provinceName) {
//          var xhttp = new XMLHttpRequest();
//          xhttp.onreadystatechange = function () {
//              if (this.readyState == 4 && this.status == 200) {
//                  myFunction(this, provinceName);
//              }
//          };
//          xhttp.open("GET", "parliament.xml", true);
//          xhttp.send();
//      }
//      function myFunction(xml, provinceName) {
//          var i;
//          var xmlDoc = xml.responseXML;
//          var table = "<table><tr><th>Name</th><th>Constituency</th><th>Province Name</th><th>Party Name</th></tr>";
//          var x = xmlDoc.getElementsByTagName("MemberOfParliament");
//          for (i = 0; i < x.length; i++) {
//
//              if (x[i].getElementsByTagName("ConstituencyProvinceTerritoryName")[0].childNodes[0].nodeValue == provinceName) {
//                  table += "<tr class='"+ x[i].getElementsByTagName("CaucusShortName")[0].childNodes[0].nodeValue.substring(0,4).toLowerCase()+"-color'><td>" +
//                  x[i].getElementsByTagName("PersonOfficialFirstName")[0].childNodes[0].nodeValue + " " +
//                  x[i].getElementsByTagName("PersonOfficialLastName")[0].childNodes[0].nodeValue +
//                          "</td><td>" +
//                  x[i].getElementsByTagName("ConstituencyName")[0].childNodes[0].nodeValue +
//                          "</td><td>" +
//                  x[i].getElementsByTagName("ConstituencyProvinceTerritoryName")[0].childNodes[0].nodeValue +
//                          "</td><td>" +
//                  x[i].getElementsByTagName("CaucusShortName")[0].childNodes[0].nodeValue +
//                          "</td></tr>";
//              }
//
//
//
//          }
//          document.getElementById("modalText").innerHTML = table + "</table>";
//      }
