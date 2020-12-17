import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ProductosgamasPage } from './productosgamas.page';

const routes: Routes = [
  {
    path: '',
    component: ProductosgamasPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ProductosgamasPageRoutingModule {}
