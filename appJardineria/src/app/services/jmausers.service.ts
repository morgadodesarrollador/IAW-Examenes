import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class JmausersService {

  constructor(private http: HttpClient) { }

  public getUsers(){
    return this.http.get('http://ExJardineria.test:80/Jardineria/public/api/admin/users')
  }
}
