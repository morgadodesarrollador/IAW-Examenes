import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { DsploginPageRoutingModule } from './dsplogin-routing.module';

import { DsploginPage } from './dsplogin.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    DsploginPageRoutingModule
  ],
  declarations: [DsploginPage]
})
export class DsploginPageModule {}
