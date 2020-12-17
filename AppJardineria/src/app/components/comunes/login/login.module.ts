import { LoginComponent } from './login.component';
import { ComunesModule } from './../comunes.module';
import { IonicModule } from '@ionic/angular';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { LoginRoutingModule } from './login-routing.module';


@NgModule({
  declarations: [LoginComponent],
  imports: [
    CommonModule,
    LoginRoutingModule,
    IonicModule,
    ComunesModule
  ]
})
export class LoginModule { }
