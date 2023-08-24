import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { ExerciseInterface } from "../interfaces/exercise.interface";

interface DataResponse<T> {
  data: T[];
}

@Injectable({
  providedIn: 'root'
})
export class ExerciseService {
  private apiUrl = 'http://gymapp.eu-1.sharedwithexpose.com/api/exercise';

  constructor(private http: HttpClient) {}

  getExercises(): Observable<DataResponse<ExerciseInterface>> {
    return this.http.get<DataResponse<ExerciseInterface>>(this.apiUrl);
  }
}
