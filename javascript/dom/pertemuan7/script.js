function comp() {
	const random = Math.random();
	if(random <= 0.34) return "gajah";
	if(random > 0.34 && random <= 0.65) return "semut";
	if(random > 0.65) return "orang";
}

function mechanism(player, comp) {
	if(player == comp) return "SERI!";
	if(player == "gajah") return (comp == "semut") ? "KALAH!" : "MENANG!";
	if(player == "orang") return (comp == "gajah") ? "KALAH!" : "MENANG!";
	if(player == "semut") return (comp == "orang") ? "KALAH!" : "MENANG!";
}

console.log(mechanism("gajah", comp()));
