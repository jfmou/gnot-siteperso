'use strict';

var picturesHistory = [];

function _getRandomBackground(urls) {
  var randIdx,
      count = 0,
      picture;

  for (var prop in urls) {
    if (Math.random() < 1/++count) {
      randIdx = prop;
    }
  }

  picture = urls[randIdx];

  if (!picturesHistory.includes(picture)) { // to avoid doublons since we randomize picture order
    picturesHistory.push(picture);

    return picture;
  } else {
    return _getRandomBackground(urls);
  }
}

function _addImageAsBgOfElement(elem, imageUrl) {
  elem.style.backgroundImage =  'url(' + imageUrl + ')';

  return elem;
}

document.addEventListener("DOMContentLoaded", function() {
  _addImageAsBgOfElement(document.body, _getRandomBackground(imgUrls));
});

document.addEventListener("keydown", function(e) {
  if (e.keyCode == 39 && (Object.keys(imgUrls).length > picturesHistory.length)) {
    _addImageAsBgOfElement(document.body, _getRandomBackground(imgUrls));
  }
});
