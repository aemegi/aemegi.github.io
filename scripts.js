

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  
  if (tabName != 'about') {
    document.getElementById('about').style.display = "none";
  } else {
    document.getElementById('about').style.display = "flex";
  }
 
  if (tabName != 'hireme') {
    document.getElementById('hireme').style.display = "none";
  } else {
    document.getElementById('hireme').style.display = "flex";
  }

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }

  if (tabName === "all") {
    var allContent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < allContent.length; i++) {
      allContent[i].style.display = "block";
    }
  } else {
    var selectedContent = document.getElementsByClassName(tabName);
    for (i = 0; i < selectedContent.length; i++) {
      selectedContent[i].style.display = "block";
      selectedContent[i].style.position = "relative";
      selectedContent[i].style.animationName = "slideIn";
      selectedContent[i].style.animationDuration = "1s";
      selectedContent[i].style.anitmationDelay = "0.5s";
      selectedContent[i].style.animationFillMode = "forwards";
    }
  }
  evt.currentTarget.classList.add("active");
}

// Display all elements for the "All" tab by default
var allTabButton = document.querySelector(".tablinks[data-tab='all']");
allTabButton.click();

/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
} 