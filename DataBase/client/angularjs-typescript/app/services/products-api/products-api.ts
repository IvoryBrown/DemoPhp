import * as angular from 'angular'
import IHttpPromise = angular.IHttpPromise;

export interface IProduct {
  "id"?: string;
  "name"?: string;
  "short_description"?: string;
  "description"?: string;
  "price"?: number;
  "created_at"?: Date;
  "updated_at"?: Date;
  "deleted_at"?: Date;
}

export interface IProductsApi {
  all(): IHttpPromise<IProduct[]>
  getById(id: string): IHttpPromise<IProduct>
}

class ProductsApi implements IProductsApi {

  protected basePath = 'http://localhost/v1';
  public defaultHeaders : any = {};

  static $inject: string[] = ['$http', '$httpParamSerializer'];

  constructor(protected $http: ng.IHttpService, protected $httpParamSerializer?: (d: any) => any, basePath?: string) {
    if (basePath !== undefined) {
      this.basePath = basePath;
    }
  }

  all(): IHttpPromise<IProduct[]> {
    const localVarPath = this.basePath + '/products';

    let queryParameters: any = {};
    let headerParams: any = (<any>Object).assign({}, this.defaultHeaders);
    let httpRequestParams: ng.IRequestConfig = {
      method: 'GET',
      url: localVarPath,
      params: queryParameters,
      headers: headerParams
    };
    return this.$http(httpRequestParams);
  }

  getById(id: string): IHttpPromise<IProduct> {
    const localVarPath = this.basePath + '/products/{id}'
            .replace('{' + 'id' + '}', String(id));

    let queryParameters: any = {};
    let headerParams: any = (<any>Object).assign({}, this.defaultHeaders);
    // verify required parameter 'id' is not null or undefined
    if (id === null || id === undefined) {
      throw new Error('Required parameter id was null or undefined when calling productsIdGet.');
    }
    let httpRequestParams: ng.IRequestConfig = {
      method: 'GET',
      url: localVarPath,
      params: queryParameters,
      headers: headerParams
    };
    return this.$http(httpRequestParams);
  }

}

const moduleName = 'myApp.productsApi';
export default moduleName

angular.module(moduleName, [])
  .service('productsApi', ProductsApi);
