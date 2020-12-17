import { Component, OnInit } from '@angular/core';

import { Platform } from '@ionic/angular';
import { SplashScreen } from '@ionic-native/splash-screen/ngx';
import { StatusBar } from '@ionic-native/status-bar/ngx';
import { GamasService } from './services/gamas.service';
import { UsuariosService } from './services/usuarios.service';


@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss']
})
export class AppComponent implements OnInit {
  
  gamas: any;
  usuarios: any;
  constructor(
    private platform: Platform,
    private splashScreen: SplashScreen,
    private statusBar: StatusBar,
    private gamasService: GamasService,
    private usuariosService: UsuariosService
  ) {
    this.initializeApp();
  }

  initializeApp() {
    this.platform.ready().then(() => {
      this.statusBar.styleDefault();
      this.splashScreen.hide();
    });
  }

  ngOnInit() {
    this.usuariosService.getUsuarios()
      .subscribe( data => {
        this.usuarios = data;
        console.log(this.usuarios);
    });
    this.gamasService.getGamas()
      .subscribe( data => {
        this.gamas = data;
        console.log(data)
      })
  }
}
