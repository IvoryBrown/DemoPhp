import * as angular from 'angular'
import productsApiModule,{IProduct, IProductsApi} from "../../services/products-api/products-api";

//import booksApiModule, {IBook, IBooksApi} from '../../services/books-api/books-api'

interface IRouteParams extends angular.route.IRouteParamsService {
  id: string
}

class ProductsShow {
  
  product: IProduct;
  
  constructor (
    productsApi: IProductsApi,
    $routeParams: IRouteParams
  ) {
      productsApi.getById($routeParams.id)
      .then(product => this.product = product.data)
  }
}

const moduleName = 'myApp.products-show';
export default moduleName

angular.module(moduleName, [productsApiModule])
  .component('productsShow', {
    templateUrl: 'app/components/products-show/products-show.html',
    controller: ProductsShow
  });
