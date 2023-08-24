import { Component } from '@angular/core';
import { IonicModule } from '@ionic/angular';
import { ExploreContainerComponent } from '../../explore-container/explore-container.component';
import {ExerciseOverviewComponent} from "../../components/exercise/exercise-overview/exercise-overview.component";

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss'],
  standalone: true,
    imports: [IonicModule, ExploreContainerComponent, ExerciseOverviewComponent]
})
export class Tab2Page {

  constructor() {}

}
