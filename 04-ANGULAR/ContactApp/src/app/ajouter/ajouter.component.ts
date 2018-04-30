import {Component, EventEmitter, OnInit, Output} from '@angular/core';
import {Contact} from '../models/contact';


@Component({
  selector: 'app-ajouter',
  templateUrl: './ajouter.component.html',
  styleUrls: ['./ajouter.component.css']
})
export class AjouterComponent implements OnInit {

  @Output() unContactEstCree = new EventEmitter();
  nouveauContact: Contact = new Contact();
  active = true;
  constructor() { }

  ngOnInit() {
  }
  /**
   * Fonction appellée après le
   * submit du Formulaire.
   */
  submitContact() {

    /**
     * Lorsque mon formulaire est soumis, j'émet un
     * événement qui sera écouté par mon apllication,
     * et qui récupèrera les données du nouveau contact.
     */
    this.unContactEstCree.emit({leContact: this.nouveauContact});

    // -- Réinitialiser le Nouveau Contact
    this.nouveauContact = new Contact();

    // -- Réinitialisation du Formulaire
    this.active = false;
    setTimeout(() => this.active = true, 0);
  }
}
