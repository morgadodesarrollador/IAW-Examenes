import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class GamasService {

  constructor(private _http: HttpClient) { }
  getEditores () {
    return this._http.get(`http://jardineria.test/api/admin/cofgamasproductos`)
  }
}
