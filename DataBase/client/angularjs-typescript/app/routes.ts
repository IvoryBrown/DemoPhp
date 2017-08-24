const moduleName = 'myApp.routes';
export default moduleName

angular.module(moduleName, [])
  .config(($routeProvider: angular.route.IRouteProvider) => {
    $routeProvider
      .when('/', {
        template: '<home-index></home-index>'/*`<h1>Hallo {{name}}!</h1><input type="text" ng-model="name">`*/
      })
      .when('/products', {
        template: '<products-index></products-index>'
      })
      .when('/products/:id', {
        template: '<products-show></products-show>'
      })
  })
