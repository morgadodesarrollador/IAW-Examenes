import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { JcgggamasComponent } from './jcgggamas.component';

describe('JcgggamasComponent', () => {
  let component: JcgggamasComponent;
  let fixture: ComponentFixture<JcgggamasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ JcgggamasComponent ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(JcgggamasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
