import { TestBed } from '@angular/core/testing';

import { GamasService } from './gamas.service';

describe('GamasService', () => {
  let service: GamasService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(GamasService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
