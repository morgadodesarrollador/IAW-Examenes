import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { GamasComponent } from './gamas.component';
import { ProductosgamaComponent } from './productosgama/productosgama.component';

const routes: Routes = [
  {
    path: ':id', component: GamasComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class GamasRoutingModule { }
