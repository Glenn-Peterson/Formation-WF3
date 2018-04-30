import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import {Contact} from '../models/contact';
import {Observable} from 'rxjs/Observable';

@Injectable()
export class ContactApiService {

  constructor(private http: HttpClient) { }

  getContact(): Observable<Contact[]> {
    return this.http.get<Contact[]>('https://jsonplaceholder.typicode.com/users');
  }
}
