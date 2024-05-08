function openTab(evt, tabName) {
    var i, tabcontent, tablinks;

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
      }
    }

    evt.currentTarget.classList.add("active");
  }

  // Display all elements for the "All" tab by default
  var allTabButton = document.querySelector(".tablinks[data-tab='all']");
  allTabButton.click();