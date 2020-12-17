import { IonicModule } from '@ionic/angular';
import { HeaderComponent } from './header/header.component';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ComunesRoutingModule } from './comunes-routing.module';


@NgModule({
  declarations: [HeaderComponent],
  exports: [HeaderComponent],
  imports: [
    CommonModule,
    ComunesRoutingModule,
    IonicModule
  ]
})
export class ComunesModule { }
