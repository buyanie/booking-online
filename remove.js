function removeSelectDefaults() {
        var emptyBoxes = document.getElementsByTagName("select");
        for (var i = 0; i < emptyBoxes.length; i++) {
            emptyBoxes[i].selectedIndex = -1;
        }
 }
 
 if (window.addEventListener) {
      window.addEventListener("load", removeSelectDefaults, false);
    } else if (window.attachEvent) {
 window.attachEvent("onload", removeSelectDefaults);
 }