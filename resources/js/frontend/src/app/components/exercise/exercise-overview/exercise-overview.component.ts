import { Component, OnInit } from '@angular/core';
import { CommonModule } from "@angular/common";
import { ExerciseService } from "../../../services/exercise.service";
import { ExerciseInterface } from "../../../interfaces/exercise.interface";

@Component({
  selector: 'app-exercise-overview',
  standalone: true,
  templateUrl: './exercise-overview.component.html',
  styleUrls: ['./exercise-overview.component.scss'],
  imports: [ CommonModule ]
})

export class ExerciseOverviewComponent  implements OnInit {
  public exercises: ExerciseInterface[] = [];

  constructor(
    private exerciseService: ExerciseService
  ) { }

  ngOnInit() {
    this.exerciseService.getExercises().subscribe((response) => {
      this.exercises = response.data;
      console.log(this.exercises);
    });
  }
}
