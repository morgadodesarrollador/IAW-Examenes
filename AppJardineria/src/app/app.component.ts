import { GamasService } from './services/gamas.service';
import { UsuariosService } from './services/usuarios.service';
import { Component, OnInit } from '@angular/core';

import { Platform } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { StatusBar } from '@ionic-native/status-bar/ngx';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss']
})
export class AppComponent implements OnInit {
  
  usuarios: any;

  gamasproductos: any;

  constructor( private usuService: UsuariosService, private gamaService: GamasService ) { }

  ngOnInit() {
    this.usuService.getUsuario()
      .subscribe(data => {
        this.usuarios = data,
        console.log(data);
      });
      this.gamaService.getGamas()
      .subscribe(data => {
        this.gamasproductos = data,
        console.log(data);
      });
  }

}
