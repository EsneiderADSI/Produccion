angular.module('ui.bootstrap.demo', ['ui.bootstrap'])
  .directive('dropDown', function($compile) {
      return {
          
          restrict: 'E',
          
          scope: {
            user: '=user'
          },
          
          controller: function($scope) {
              
              $scope.addChild = function (child) {
                  var index = $scope.user.children.length;
                  $scope.user.children.push({
                      "parent": $scope.user,
                      "children": [],
                      "index": index
                  });
              }
              
              $scope.remove = function () {
                  if ($scope.user.parent) {
                    var parent = $scope.user.parent;
                    var index = parent.children.indexOf($scope.user);
                    parent.children.splice(index, 1);
                  }
              }
          },
          
          templateUrl: 'agregar.blade.php',
          
          link: function ($scope, $element, $attrs) {
            
          },
          
          compile: function(tElement, tAttr) {
              var contents = tElement.contents().remove();
              var compiledContents;
              return function(scope, iElement, iAttr) {
                  if(!compiledContents) {
                      compiledContents = $compile(contents);
                  }
                  compiledContents(scope, function(clone, scope) {
                           iElement.append(clone); 
                  });
              };
          }
      };
  });
  

angular.module('ui.bootstrap.demo').controller('DatepickerDemoCtrl', function ($scope) {
    
    $scope.users = [{
        "parent": null,
        "children": [],
        "index": 0
    }]
    
    $scope.today = function () {
        $scope.dt = new Date();
    };
    $scope.today();

    $scope.clear = function () {
        $scope.dt = null;
    };

    // Disable weekend selection
    $scope.disabled = function (date, mode) {
        return (mode === 'day' && (date.getDay() === 0 || date.getDay() === 6));
    };

    $scope.toggleMin = function () {
        $scope.minDate = $scope.minDate ? null : new Date();
    };
    $scope.toggleMin();

    $scope.open = function ($event) {
        $event.preventDefault();
        $event.stopPropagation();

        $scope.opened = true;
    };

    $scope.dateOptions = {
        formatYear: 'yy',
        startingDay: 1
    };

    $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
    $scope.format = $scope.formats[0];

    var tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    var afterTomorrow = new Date();
    afterTomorrow.setDate(tomorrow.getDate() + 2);
    $scope.events =
            [
                {
                    date: tomorrow,
                    status: 'full'
                },
                {
                    date: afterTomorrow,
                    status: 'partially'
                }
            ];

    $scope.getDayClass = function (date, mode) {
        if (mode === 'day') {
            var dayToCheck = new Date(date).setHours(0, 0, 0, 0);

            for (var i = 0; i < $scope.events.length; i++) {
                var currentDay = new Date($scope.events[i].date).setHours(0, 0, 0, 0);

                if (dayToCheck === currentDay) {
                    return $scope.events[i].status;
                }
            }
        }

        return '';
    };
});