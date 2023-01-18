/*
read get parameter
*/
function getParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, '\\$&');
  var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

/*
object availbility
*/
var waitForElement = function (selector, callback) {
  var interv = setInterval(function () {
    if (document.querySelector(selector)) {
      clearInterval(interv);
      callback(document.querySelector(selector));
    }
  }, 60);
};

var waitForElement$ = function (selector, callback) {
  var interv = setInterval(function () {
    if (typeof $ !== 'undefined' && $(selector).length > 0) {
      var $ele = $(selector);
      clearInterval(interv);
      callback($ele);
    }
  }, 60);
};
var waitForLib = function (lib, callback) {
  var intervLib = setInterval(function () {
    if (typeof window[lib] !== 'undefined') {
      clearInterval(intervLib);
      callback();
    }
  }, 60);
};


/*
response token handling
*/
function isEmpty(val) {
  return (val === undefined || val == null || val.length <= 0) ? true : false;
}
function key(obj) {
  return Object.keys(obj)
          .map(function(k) { return k + "" + obj[k]; })
          .join("");
}
function distinct(arr) {
  var result = arr.reduce(function(acc, e) {
    acc[key(e)] = e;
    return acc;
  }, {});
  return Object.keys(result)
          .map(function(k) { return result[k]; });
}