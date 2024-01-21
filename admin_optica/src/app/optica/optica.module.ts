import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { OpticaRoutingModule } from './optica-routing.module';
import { OpticaComponent } from './optica.component';
import { SharedModule } from '../shared/shared.module';
//import { HeaderComponent } from '../common-component/header/header.component';
//import { SidebarComponent } from '../common-component/sidebar/sidebar.component';


@NgModule({
  declarations: [
    OpticaComponent,
    //HeaderComponent,
    //SidebarComponent,
  ],
  imports: [
    CommonModule,
    OpticaRoutingModule,
    SharedModule,
  ]
})
export class OpticaModule { }
