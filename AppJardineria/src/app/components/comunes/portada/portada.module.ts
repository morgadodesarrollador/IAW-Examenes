import { IonicModule } from '@ionic/angular';
import { PortadaComponent } from './portada.component';
import { ComunesModule } from './../comunes.module';
import { HeaderComponent } from './../header/header.component';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { PortadaRoutingModule } from './portada-routing.module';


@NgModule({
  declarations: [PortadaComponent],
  imports: [
    CommonModule,
    PortadaRoutingModule,
    ComunesModule,
    IonicModule
  ]
})
export class PortadaModule { }
