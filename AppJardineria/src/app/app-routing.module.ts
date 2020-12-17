import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full'
  },
  {
    path: '',
    loadChildren: () => import('./components/comunes/portada/portada.module').then( m=> m.PortadaModule )
  },
  {
    path: '',
    loadChildren: () => import('./components/comunes/login/login.module').then( m=> m.LoginModule )
  }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
