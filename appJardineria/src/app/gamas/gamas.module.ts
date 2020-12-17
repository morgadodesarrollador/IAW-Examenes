import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { GamasPageRoutingModule } from './gamas-routing.module';

import { GamasPage } from './gamas.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    GamasPageRoutingModule
  ],
  declarations: [GamasPage]
})
export class GamasPageModule {}
