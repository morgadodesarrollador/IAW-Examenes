import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ProductosgamasPageRoutingModule } from './productosgamas-routing.module';

import { ProductosgamasPage } from './productosgamas.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ProductosgamasPageRoutingModule
  ],
  declarations: [ProductosgamasPage]
})
export class ProductosgamasPageModule {}
