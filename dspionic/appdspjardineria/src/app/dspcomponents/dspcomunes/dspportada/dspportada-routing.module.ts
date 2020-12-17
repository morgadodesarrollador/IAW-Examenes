import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DspportadaPage } from './dspportada.page';

const routes: Routes = [
  {
    path: '',
    component: DspportadaPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class DspportadaPageRoutingModule {}
