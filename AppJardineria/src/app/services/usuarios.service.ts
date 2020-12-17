import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class UsuariosService {

  constructor(private http: HttpClient) { }

  public getUsuario() {
    return this.http.get('http://jardineria.test/api/admin/user');
  }

}
