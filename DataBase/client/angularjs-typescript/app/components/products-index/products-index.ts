import * as angular from 'angular'
import productsApiModule, {IProduct, IProductsApi} from "../../services/products-api/products-api";

class ProductsIndex {

    products: IProduct[];
    constructor (
        productsApi:IProductsApi
    ) {
        productsApi.all()
        .then(products => {
            this.products = products.data;
        })
  }
}

const moduleName = 'myApp.books-index';
export default moduleName

angular.module(moduleName, [productsApiModule])
    .component('productsIndex', {
        templateUrl: 'app/components/products-index/products-index.html',
        controller: ProductsIndex
    });
