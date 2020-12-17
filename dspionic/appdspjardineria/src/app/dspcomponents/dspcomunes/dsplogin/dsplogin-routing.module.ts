import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DsploginPage } from './dsplogin.page';

const routes: Routes = [
  {
    path: '',
    component: DsploginPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class DsploginPageRoutingModule {}
