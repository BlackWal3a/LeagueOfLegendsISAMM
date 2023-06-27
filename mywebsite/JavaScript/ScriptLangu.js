        var aboutText = document.getElementById("about-text");
        var discover = document.getElementById("discover");
        var inscrire = document.getElementById("inscrire");
        var connecter = document.getElementById("connecter");
        var contacter = document.getElementById("contacter");
        var champ_choose = document.getElementById("champ_choose");
        var fun = document.getElementById("fun");
        var title1 = document.getElementById("title1");
        var title2 = document.getElementById("title2");
        var title3 = document.getElementById("title3");
        var parag1 = document.getElementById("parag1");
        var parag2 = document.getElementById("parag2");
        var parag3 = document.getElementById("parag3");
        var take = document.getElementById("take");



		var language = "english"; // default language is English

		function changeLanguage() {
			if (language === "english") {
                aboutText.innerHTML = "A propos de nous";
                discover.innerHTML = "Décourvrir";
                inscrire.innerHTML = "S'inscrire";
                connecter.innerHTML = "Se connecter";
                contacter.innerHTML = "Contactez-nous";
                champ_choose.innerHTML = "Choisissez votre champion";
                fun.innerHTML = "Bonjour, amusons-nous.                ";
                title1.innerHTML = "À propos de League?                ";
                title2.innerHTML = "Revenus";
                title3.innerHTML = "Propriétaire";
                parag1.innerHTML = "League of Legends est un jeu de stratégie en équipe où deux équipes de cinq champions puissants s'affrontent pour détruire la base de l'adversaire. Choisissez parmi plus de 140 champions pour réaliser des actions épiques, assurer des éliminations et détruire les tours ennemies tout en vous battant pour remporter la victoire";
                parag2.innerHTML = "League of Legends aurait généré environ 1,75 milliard de dollars de revenus, ce qui représente une augmentation par rapport à l'année précédente. Il est important de noter que les chiffres de revenus peuvent varier en fonction des sources et des méthodes utilisées pour le calcul, et que Riot Games peut ne pas divulguer publiquement ses chiffres de revenus exacts";
                parag3.innerHTML = "League of Legends est développé et édité par Riot Games, Inc., une société américaine de jeux vidéo. Riot Games a été fondée en 2006 par Brandon Beck et Marc Merrill, qui sont également les cofondateurs de l'entreprise";
                take.innerHTML = "PREND LEAGUE AVEC TOI ";


				language = "french";
			} else {
				aboutText.innerHTML = "About Us";
                discover.innerHTML = "Discover";
                inscrire.innerHTML = "Sign up";
                connecter.innerHTML = "Log In";
                contacter.innerHTML = "Contact Us";
                champ_choose.innerHTML = "Choose Your Champion";                
                fun.innerHTML = "Hello , Let's have fun";
                title1.innerHTML = "About League?";
                title2.innerHTML = "Earnings";
                title3.innerHTML = "Owner";

                parag1.innerHTML = "League of Legends is a team-based strategy game where two teams of five powerful champions face off to destroy the other’s base. Choose from over 140 champions to make epic plays, secure kills, and take down towers as you battle your way to victory";
                parag2.innerHTML = "League of Legends reportedly generated around $1.75 billion in revenue, which is an increase from the previous year. It's important to note that revenue figures can vary depending on the sources and methods used for calculation, and Riot Games may not disclose their exact revenue figures publicly";
                parag3.innerHTML = "League of Legends is developed and published by Riot Games, Inc., which is an American video game company. Riot Games was founded in 2006 by Brandon Beck and Marc Merrill, who are also the co-founders of the company ";
                take.innerHTML = "TAKE LEAGUE WITH YOU  ";


				language = "english";
			}
		}
        function myFunction(){
            alert("Button clicked!");
        }
        var hello = document.getElementById("league");

  hello.onmouseover = function() {
  hello.style.color = "red";
}

hello.onmouseout = function() {
  hello.style.color = "black";
}