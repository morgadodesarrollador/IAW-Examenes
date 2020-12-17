import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { IonicModule } from '@ionic/angular';

import { ProductosgamasPage } from './productosgamas.page';

describe('ProductosgamasPage', () => {
  let component: ProductosgamasPage;
  let fixture: ComponentFixture<ProductosgamasPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProductosgamasPage ],
      imports: [IonicModule.forRoot()]
    }).compileComponents();

    fixture = TestBed.createComponent(ProductosgamasPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
