import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'dsplogin', pathMatch: 'full' },
  {
    path: '',
    loadChildren: () => import('./tabs/tabs.module').then(m => m.TabsPageModule)
  },
  {
    path: '',
    loadChildren: () => import('./dspcomponents/dspgamas/dspgamas.module').then(m => m.DspgamasModule)
  },
  {
    path: 'dspportada',
    loadChildren: () => import('./dspcomponents/dspcomunes/dspportada/dspportada.module').then( m => m.DspportadaPageModule)
  },
  {
    path: 'dsplogin',
    loadChildren: () => import('./dspcomponents/dspcomunes/dsplogin/dsplogin.module').then(m => m.DsploginPageModule)
  }
];
@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
