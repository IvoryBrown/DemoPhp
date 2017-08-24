/**
 * Created by jeght on 2017. 06. 08..
 */
import * as angular from 'angular'

class HomeIndex {
    constructor() {
    }
}

const moduleName = 'myApp.home-index';
export default moduleName;

angular.module(moduleName, [])
    .component('homeIndex', {
        templateUrl: 'app/components/home-index/home-index.html',
        controller: HomeIndex

        });
