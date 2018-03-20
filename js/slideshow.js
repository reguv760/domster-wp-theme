function insertAfter(newElement,targetElement) {
  var parent = targetElement.parentNode;
  if (parent.lastChild == targetElement) {
    parent.appendChild(newElement);
  } else {
    parent.insertBefore(newElement,targetElement.nextSibling);
  }
}

function moveElement(elementID,final_x,final_y,interval) {
  if (!document.getElementById) return false;
  if (!document.getElementById(elementID)) return false;
  var elem = document.getElementById(elementID);
  if (elem.movement) {
    clearTimeout(elem.movement);
  }
  if (!elem.style.left) {
    elem.style.left = "0px";
  }
  if (!elem.style.top) {
    elem.style.top = "0px";
  }
  var xpos = parseInt(elem.style.left);
  var ypos = parseInt(elem.style.top);
  if (xpos == final_x && ypos == final_y) {
    return true;
  }
  if (xpos < final_x) {
    var dist = Math.ceil((final_x - xpos)/10);
    xpos = xpos + dist;
  }
  if (xpos > final_x) {
    var dist = Math.ceil((xpos - final_x)/10);
    xpos = xpos - dist;
  }
  if (ypos < final_y) {
    var dist = Math.ceil((final_y - ypos)/10);
    ypos = ypos + dist;
  }
  if (ypos > final_y) {
    var dist = Math.ceil((ypos - final_y)/10);
    ypos = ypos - dist;
  }
  elem.style.left = xpos + "px";
  elem.style.top = ypos + "px";
  var repeat = "moveElement('"+elementID+"',"+final_x+","+final_y+","+interval+")";
  elem.movement = setTimeout(repeat,interval);
}

function prepareSlideshow() {
  if (!document.getElementsByTagName) return false;
  if (!document.getElementById) return false;
  //if (!document.getElementById("intro")) return false;
  //var intro = document.getElementById("intro");
  var slideshowContainer = document.getElementsByClassName("slideshow-container")[0];

  //console.log(slideshowContainer);
  var slideshow = document.createElement("div");
  slideshow.setAttribute("id","slideshow");

  // var frame = document.createElement("img");
  // frame.setAttribute("src","images/frame.gif");
  // frame.setAttribute("alt","");
  // frame.setAttribute("id","frame");
  // slideshow.appendChild(frame);
  var imageSlideshow = document.createElement("img");
  imageSlideshow.setAttribute("src","./wp-content/themes/domster-rg/img/slideshow.gif");
  imageSlideshow.setAttribute("alt","a glimpse of what awaits you");

  imageSlideshow.setAttribute("id","image-slideshow");
  imageSlideshow.setAttribute("class","image-slideshow");
  slideshow.appendChild(imageSlideshow);
  insertAfter(slideshow,slideshowContainer);


  //make slideshow interactive based on hover on button for page:::
  // var links = document.getElementsByTagName("a");
  // for (var i=0; i<links.length; i++) {
  //   links[i].onmouseover = function() {
  //     var destination = this.getAttribute("href");
  //     if (destination.indexOf("/") != -1) {
  //       moveElement("image-slideshow",0,0,5);
  //     }
  //     if (destination.indexOf("/blog") != -1) {
  //       moveElement("image-slideshow",-650,0,5);
  //     }
  //     if (destination.indexOf("/gallery") != -1) {
  //       moveElement("image-slideshow",-1300,0,5);
  //     }
      // if (destination.indexOf("live.html") != -1) {
      //   moveElement("preview",-450,0,5);
      // }
      // if (destination.indexOf("contact.html") != -1) {
      //   moveElement("preview",-600,0,5);
      // }
    }
  }
}

addLoadEvent(prepareSlideshow);
