import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { DspgamasComponent } from './dspgamas.component';

describe('DspgamasComponent', () => {
  let component: DspgamasComponent;
  let fixture: ComponentFixture<DspgamasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DspgamasComponent ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(DspgamasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
