import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';
import { PortadaComponent } from './components/comunes/portada/portada.component';
import { PerfilComponent } from './components/comunes/perfil/perfil.component';
import { LoginComponent } from './components/comunes/login/login.component';

const routes: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'home', component: PortadaComponent },
  { path: 'perfil', component: PerfilComponent },
  { path: 'login', component: LoginComponent},
  {
    path: 'gamas',
    loadChildren: () => import('./components/gamas/gamas.module').then( m => m.GamasModule)
  }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
