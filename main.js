'use strict';

var backgroundHandler = function() {
  var temp_keyImgUrl;

  this.picturesHistory = [],
  this.keysImgUrl = [];

  for (temp_keyImgUrl in imgUrls) {
    if(imgUrls.hasOwnProperty(temp_keyImgUrl)) {
       this.keysImgUrl.push(temp_keyImgUrl);
    }
  }
}

backgroundHandler.prototype._getRandomBackground = function(urls) {
  var picture = urls[this.keysImgUrl[Math.floor(Math.random() * this.keysImgUrl.length)]];

  if (!this.picturesHistory.includes(picture)) { // to avoid doublons since we randomly get pictures
    this.picturesHistory.push(picture);

    return picture;
  } else {
    return _getRandomBackground(urls);
  }
};

backgroundHandler.prototype._addImageAsBgOfElement = function(elem, imageUrl) {
  elem.style.backgroundImage =  'url(' + imageUrl + ')';

  return elem;
};

var backgrounds = new backgroundHandler();

document.addEventListener("DOMContentLoaded", function() {
  backgrounds._addImageAsBgOfElement(document.body, backgrounds._getRandomBackground(imgUrls));
});

document.addEventListener("keydown", function(e) {
  if (e.keyCode == 39 && (Object.keys(imgUrls).length > backgrounds.picturesHistory.length)) {
    backgrounds._addImageAsBgOfElement(document.body, backgrounds._getRandomBackground(imgUrls));
  }
});
