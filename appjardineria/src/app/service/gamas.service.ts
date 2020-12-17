import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class GamasService {

  constructor(private http: HttpClient) { }
  public getGamas(){
    return this.http.get('http://localhost/apijardineriaex/')
  }
}
