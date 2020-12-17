import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { GamasPage } from './gamas.page';

const routes: Routes = [
  {
    path: '',
    component: GamasPage
  },
  {
    path: 'productosgamas',
    loadChildren: () => import('./productosgamas/productosgamas.module').then( m => m.ProductosgamasPageModule)
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class GamasPageRoutingModule {}
