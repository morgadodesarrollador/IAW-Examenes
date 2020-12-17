import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { GamasComponent } from './gamas.component';

describe('GamasComponent', () => {
  let component: GamasComponent;
  let fixture: ComponentFixture<GamasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GamasComponent ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(GamasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
