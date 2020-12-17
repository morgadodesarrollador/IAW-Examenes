import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { GamasComponent } from './gamas.component';

const routes: Routes = [
  {
    path: 'gamas', component: GamasComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class GamasRoutingModule { }
