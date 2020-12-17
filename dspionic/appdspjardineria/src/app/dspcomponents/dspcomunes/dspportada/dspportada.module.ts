import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { DspportadaPageRoutingModule } from './dspportada-routing.module';

import { DspportadaPage } from './dspportada.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    DspportadaPageRoutingModule
  ],
  declarations: [DspportadaPage]
})
export class DspportadaPageModule {}
