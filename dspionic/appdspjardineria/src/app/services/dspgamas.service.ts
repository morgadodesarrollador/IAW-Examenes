import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class DspgamasService {

  constructor(private http: HttpClient) { }

  public getDspgamas(){
    return this.http.get('http://dspjardineria.test/dspApijardineria/public/api/dspgamasproductos')
  }
}
