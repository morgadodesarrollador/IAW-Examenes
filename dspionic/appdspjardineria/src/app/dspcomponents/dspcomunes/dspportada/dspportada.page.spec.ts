import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { DspportadaPage } from './dspportada.page';

describe('DspportadaPage', () => {
  let component: DspportadaPage;
  let fixture: ComponentFixture<DspportadaPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DspportadaPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(DspportadaPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
