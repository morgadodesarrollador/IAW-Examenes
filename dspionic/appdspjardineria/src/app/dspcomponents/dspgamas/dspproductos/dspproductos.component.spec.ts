import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { DspproductosComponent } from './dspproductos.component';

describe('DspproductosComponent', () => {
  let component: DspproductosComponent;
  let fixture: ComponentFixture<DspproductosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DspproductosComponent ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(DspproductosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
