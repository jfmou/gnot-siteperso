'use strict';

function _getRandomBackground(urls) {
  var randIdx;
  var count = 0;

  for (var prop in urls) {
    if (Math.random() < 1/++count) {
      randIdx = prop;
    }
  }

  return urls[randIdx];
}

function _addImageAsBgOfElement(elem, imageUrl) {
  elem.style.backgroundImage =  'url(' + imageUrl + ')';

  return elem;
}

document.addEventListener("DOMContentLoaded", function() {
  _addImageAsBgOfElement(document.body, _getRandomBackground(imgUrls));
});
