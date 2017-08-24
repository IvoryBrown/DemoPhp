import * as angular from 'angular'
import 'angular-route'

import routes from './routes'

import navigation from './components/navigation/navigation'
import homeIndex from './components/home-index/home-index'
import productsIndex from './components/products-index/products-index'
import productsShow from './components/products-show/products-show'



angular.module('myApp', [
  'ngRoute',
  routes,
  navigation,
  homeIndex,
  productsIndex,
  productsShow
])
