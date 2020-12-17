import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'login', pathMatch: 'full' },
  {
    path: 'login',
    loadChildren: () => import('./comunes/login/login.module').then( m => m.LoginPageModule)
  },
  {
    path: 'portada',
    loadChildren: () => import('./comunes/portada/portada.module').then( m => m.PortadaPageModule)
  },
  {
    path: 'gamas',
    loadChildren: () => import('./gamas/gamas.module').then( m => m.GamasPageModule)
  }
];
@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
