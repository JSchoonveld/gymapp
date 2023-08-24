import { Component } from '@angular/core';
import { IonicModule } from '@ionic/angular';
import { ExploreContainerComponent } from '../../explore-container/explore-container.component';
import {ExerciseOverviewComponent} from "../../components/exercise/exercise-overview/exercise-overview.component";
import {TaskModule} from "./explore.module";

@Component({
  selector: 'app-explore',
  templateUrl: 'explore.page.html',
  styleUrls: ['explore.page.scss'],
  standalone: true,
  imports: [
    IonicModule,
    ExploreContainerComponent,
    TaskModule,
    ExerciseOverviewComponent
  ],
})
export class ExplorePage {
  constructor() {}
}
