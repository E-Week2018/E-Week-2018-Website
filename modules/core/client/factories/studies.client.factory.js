angular.module('core').factory('Studies', ['$http',
  function($http) {
    var methods = {
      getAll: function() {
        return $http.get('http://localhost:3000/list');
      },

      create: function(study) {
        return $http.post('http://localhost:3000/api/studies', study);
      },

      delete: function(id) {
        return $http.delete('http://localhost:3000/api/studies/' + id);
      }
    };

    return methods;
  }
]);
