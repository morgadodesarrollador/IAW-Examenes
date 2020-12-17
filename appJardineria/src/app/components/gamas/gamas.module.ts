import { IonicModule } from '@ionic/angular';
import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ComunesModule } from '../comunes/comunes.module';
import { GamasRoutingModule } from './gamas-routing.module';


@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    IonicModule,
    ComunesModule,
    GamasRoutingModule
  ]
})
export class GamasModule { }
