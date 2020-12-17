import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';
import { PortadaComponent } from './components/comunes/portada/portada.component';



const routes: Routes = [
  { path: 'home', component: PortadaComponent },

  {
    path: 'gamas',
    loadChildren: () => import('./../app/components/jcgggamas/jcgggamas.module').then(m => m.JcgggamasModule)
  }
  
];
@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule {}
