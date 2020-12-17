import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { DsploginPage } from './dsplogin.page';

describe('DsploginPage', () => {
  let component: DsploginPage;
  let fixture: ComponentFixture<DsploginPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DsploginPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(DsploginPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
