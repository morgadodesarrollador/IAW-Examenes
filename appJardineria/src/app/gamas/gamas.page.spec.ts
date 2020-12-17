import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { GamasPage } from './gamas.page';

describe('GamasPage', () => {
  let component: GamasPage;
  let fixture: ComponentFixture<GamasPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GamasPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(GamasPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
