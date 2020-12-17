import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { DspperfilComponent } from './dspperfil.component';

describe('DspperfilComponent', () => {
  let component: DspperfilComponent;
  let fixture: ComponentFixture<DspperfilComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DspperfilComponent ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(DspperfilComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
