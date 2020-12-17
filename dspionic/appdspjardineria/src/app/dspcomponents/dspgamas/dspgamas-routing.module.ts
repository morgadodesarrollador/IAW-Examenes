import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { DspgamasComponent } from './dspgamas.component';

const routes: Routes = [
  {
    path: 'dspgamas', component: DspgamasComponent
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class DspgamasRoutingModule { }
