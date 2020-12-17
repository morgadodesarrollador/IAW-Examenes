import { Component, OnInit } from '@angular/core';
import { JmagamasService } from '../services/jmagamas.service';

@Component({
  selector: 'app-gamas',
  templateUrl: './gamas.page.html',
  styleUrls: ['./gamas.page.scss'],
})
export class GamasPage implements OnInit {

  gamas: any;

  constructor(private edGamas: JmagamasService) { }

  ngOnInit() {
    this.edGamas.getGamas()
     .subscribe(data =>
      ( this.gamas = data, 
      console.log (data)
     ));
    
  } 

  
}
