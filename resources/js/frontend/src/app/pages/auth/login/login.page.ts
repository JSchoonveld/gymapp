import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { IonicModule } from '@ionic/angular';
import { AuthService} from "../../../services/auth.service";
import {logIn} from "ionicons/icons";

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
  standalone: true,
  imports: [IonicModule, CommonModule, FormsModule]
})
export class LoginPage implements OnInit {

  constructor(private authService: AuthService) { }

  ngOnInit() {
  }

    protected readonly logIn = logIn;

  public login() {
    let data = {
      email: '',
      password: ''
    }

    this.authService.login(data).subscribe((res) => {
      console.log(res);
    });
  }
}
