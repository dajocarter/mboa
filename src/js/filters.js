angular.module('mboa').filter('isTrusted', function($sce) {
  return function(text) {
    return $sce.trustAsHtml(text);
  };
});

angular.module('mboa').filter('stripSlug', function() {
  return function(text) {
    if (text && typeof text === 'string') {
      return text.replace(/-/g, " ");
    }
  };
});

angular.module('mboa').filter('capitalize', function() {
  return function(text) {
    if (text && typeof text === 'string') {
      return text.replace(/\w\S*/g, function(word) {
        return (word === 'er') ? 'E.R.' : word.charAt(0).toUpperCase() + word.slice(1);
      });
    }
  }
});