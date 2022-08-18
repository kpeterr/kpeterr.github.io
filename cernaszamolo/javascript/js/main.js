"use strict";

//////// Adatok bekérése \\\\\\\\
function szamitas() {
	var oldalszam_be = document.getElementById("InputOldalszam").value;
	var irkakiloves_be = document.getElementById("nyomtatas_netto").value;
	var irkakiloves_ki = document.getElementById("irkakilovesKi");
	var elsoOldalak = document.getElementById("elsoOldalak");
	var oldalszam_help = document.getElementById("oldalszamHelp");

	var maradek = (oldalszam_be - irkakiloves_be) % irkakiloves_be;

	if (oldalszam_be % 4 == 0) {
		if (maradek == 0) {
			irkakiloves_ki.innerHTML(oldalszam_be / irkakiloves_be + "x" + irkakiloves_be);
		}
		elseif(maradek == 4) {
			echo floor(oldalszam_be / irkakiloves_be) - 2. "x".irkakiloves_be.
			" + 1x";
			$koztes = irkakiloves_be;
			echo $koztes + 4. " + 1x".irkakiloves_be;
		}
		else {
			echo floor(oldalszam_be / irkakiloves_be) - 1. "x".irkakiloves_be.
			" + 1x";
			echo maradek.
			" + 1x".irkakiloves_be;
		}
	} else {
		oldalszam_help.classList.toggle("visible");
	}
}
/*
function egesz_oldalak(oldalszam_be, irkakiloves_be) {
	maradek = (oldalszam_be - irkakiloves_be) % irkakiloves_be;

	if (oldalszam_be % 4 == 0) {
		if (maradek == 0) {
			echo floor(oldalszam_be / irkakiloves_be) * irkakiloves_be;
		}
		elseif(maradek == 4) {
			echo(floor(oldalszam_be / irkakiloves_be) - 2) * irkakiloves_be;
		}
		else {
			echo(floor(oldalszam_be / irkakiloves_be) - 1) * irkakiloves_be;
		}
	} else {
		oldalszam_help.classList.toggle("visible");
	}

}*/


// Az Enter gomb lenyomásánál ez történik
function enterGomb(event) {
	if (event.keyCode == 13) {
		szamitas()
	}
}

// A Törlés gombra kattintva ez történik
function torles() {
	window.location.reload(true);
}

// A Év beállítása
var d = new Date();
document.getElementById("ev").innerHTML = d.getFullYear();
