import { DspgamasService } from './../../services/dspgamas.service';
import { Component, OnInit } from '@angular/core';


@Component({
  selector: 'app-dspgamas',
  templateUrl: './dspgamas.component.html',
  styleUrls: ['./dspgamas.component.scss'],
})
export class DspgamasComponent implements OnInit {

  constructor(private dspService: DspgamasService) { }

  ngOnInit() {}
  
}
