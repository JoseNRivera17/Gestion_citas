import { Component, NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { OpticaModule } from './optica.module';
import { OpticaComponent } from './optica.component';
import { AuthGuard } from '../shared/gaurd/auth.guard';

const routes: Routes = [
  {
    path:'',
    component: OpticaComponent,

    // roles permissions 

    canActivate: [AuthGuard],
    children:[
      {
        path: 'roles',
        loadChildren: () =>
          import('./roles/roles.module').then((m) => m.RolesModule),
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class OpticaRoutingModule { }
