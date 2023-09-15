import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { ExerciseInterface } from "../interfaces/exercise.interface";

interface DataResponse<T> {
  data: T[];
}

interface Credentials {
  email: string;
  password: string;
}

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private apiUrl = 'http://gymapp.eu-1.sharedwithexpose.com';

  constructor(private http: HttpClient) {}

  login(credentials: Credentials): Observable<any> {
    return this.http.post(`${this.apiUrl}/login`, credentials);
  }
}
