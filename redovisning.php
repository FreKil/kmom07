<?php
//===================================================
//File: index.php
//Desc: Holds the report information
//Author: Freddy
//Created: 30/04 - 2013
//===================================================


//---------------------------------------------------
//Basic imports and variable creation.
$pageId = "report";
$title = "Redovisningar";
include('incl/header.php');
include('incl/footer.php');


//---------------------------------------------------
//Creates the basic information of this file
$html = <<<input
<div id="content">
	<h1>Redovisning av kursmomenten</h1>
	
		<article>
		<h2>Kmom05: Innehåll</h2>
		<p>
			<b>Vad tyckte du om att göra ramverket “självdokumenterande”? </b><br />
			Gillar möjligheten att rada upp hur en vad en klass innehåller och hur funktionerna fungerar utan att nödvändigtvis behöva gå igenom hela filen. Är så mycket lättare att snabbt få en överblick vad en klass är kapabel till. 
			Har tidigare när jag programmerat i Java använt mig av Java Doc så hade lite koll på hur det här fungerade innan.
		</p>
		<p>
			<b>Skriv en kort summering av ditt ramverk, är det plain Lydia eller har det några extra features? </b><br />
			Det är nog mest Lydias ramverk som använts. Möjligtvis har jag gjort vissa mindre ändringar här och där under resans gång men inte något jag direkt minns och kan kommentera.
		</p>
		<p>
			<b>Beskriv din testinstallation:</b><br />
			Är samma installation som i Lydia. Man drar ner den från github, sätter skriv rättigheter till datamappen och filerna innanför och surfar sedan till kontrollern/metoden -> module/install för att installera databasen. Därefter anger man sina konfigureringsgrejer i config.php och lägger till sin webbsida i site mappen.
			<p>
				Att ladda ner och installera från github har gått utan några problem och min test sida är ligger uppe på studentservern
			</p>
		</p>	
		<p>
			<b>Vad saknar du i ditt ramverk, vad borde funnits med, har du en att-göra-lista? </b><br />
			En navigeringsklass och någonting för headern och bannern. Just nu ligger dessa i config-filen men tänkte flytta ut dom så man kan lägga till dom från sin egen "webbsida" utan att behöva rota igenom config-filen. Tror det blir snyggare och lättare att hitta, samt att man kan skapa en liten mera avancerade navigeringsalternativ utan att det blir rörigt.
		</p>
	</article>
	
	<article>
		<h2>Kmom06: CSS-ramverk och grid layout </h2>
		<p>
			<b>Vad tycker du om gridbaserad layout? </b><br />
			Verkar vara ett bra sätt att lägga upp sin design på webbsidorna och få lite mera ordning.
			Ser rätt snyggt ut med ett tydligare indelning av informationen också.
		</p>
		<p>
			<b>Vad tycker du om CSS-ramverk i allmänhet och vilka tidigare erfarenheter har du av dem? </b><br />
			Har inga tidigare erfarenheter av CSS-ramverk, visste inte att dom existerade förrän jag började den här kursen.
			Har kikat lite på lite olika ramverk, framförallt bootstrap och det verkar ju rätt intressant. 
			Det underlättar en del med att man får många saker som kan vara intressant på en webbsida redan färdigutvecklade och bara att implementera.
		</p>
		<p>
			<b>Vad tycker du om LESS, lessphp och Semantic.gs? </b><br />
			Tycker LESS var riktigt intressant, har aldrig tidigare hört om det. 
			Möjligheten att använda sig av variabler gör att att man kan tjäna väldigt mycket tid vid eventuella ändringar senare. En annan sak jag gillar är hur man på ett tydligare sätt kan visa hur saker är kodade i HTML genom att less tillåter nästling i koden.
			<p>
				lessphp var väl ett bra verktyg för phputvecklare att använda vid utvecklandet av LESS-kod och det lär komma till stor nytta i framtiden.
			</p>
			<p>
				Vad gäller Semantic.gs så verkar det vara ett litet nätt CSS-ramverk. Ingenting märkvärdigt utan  verkar innehålla det grundläggande som behövs för att underlätta skapandet av en grind-design.
			</p>
			
		</p>	
		<p>
			<b>Beskriv ditt grundtema, hur tänkte du när du gjorde det, gjorde du några utsvävningar? </b><br />
			Följde till större delen lydia-guiden och använde Semantic.gs som grund.
			Lade dock till en navigeringsbar ovanför bannern vilket gör det lite smidigare att navigera runt bland kontrollerna i mitt ramverk.
		</p>
		
	</article>
	
	<article>
		<h2>Kmom05: Innehåll</h2>
		<p>
			<b>Hur gick det när du byggde ut ramverket med stöd för innehåll? </b><br />
			Det har gått utan några problem alls. 
			Allt är på plats och fungerar väl antagligen som det var tänkt.
		</p>
		<p>
			<b>Läste du materialet om att skriva för webben? </b><br />
			Ja, det var en hel del matnyttig information i den artikeln som kan vara värt att komma ihåg.
			Är ju en hel del sådana här småsaker i webbutveckling som man oftast inte ens tänker på när man skapar sina webbsidor och den här artikeln gav ju en hel del information om hur vi fungerar när vi läser på internet, samt en hel del tips om hur man ska presentera sin information på nätet för att behålla besökaren och det kan ju givetvis vara bra att ha i minnet när man utvecklar sina webbsidor.
		</p>
		<p>
			<b>Läste du materialet om XSS?</b><br />
			Läste en hel del om XSS och har fått mer kunskap om vad det är och hur jag kan skydda mig mot det. Har hört talas om detta tidigare(samt SQL-injektioner) men har aldrig direkt fördjupat mig i vad det faktiskt är eller hur det fungerar. Detta mest på grund av att man använder JS eller liknande vilket jag inte har några kunskaper inom vilket gjort det svårt att testa den här typen av attacker själv. 
		</p>	
		<p>
			<b>Gjorde du extrauppgiften med CTextFilter och implementerade extra filter? </b><br />
			Ja, skapade funktionen Filter() som tar emot en text-sträng samt en array med strängar där man ska ange vilket eller vilka filter man ska köra texten genom. Om bara ett filter ska tillämpas kan man välja att anropa dessa funktioner separat om man vill.? 
		</p>
		
	</article>
	
	<article>
		<h2>Kmom04: Modeller för login, användare och grupper </h2>
		<p>
			<b>Hur kändes det att jobba med CForm-klassen (den du valde)? </b><br />
			Lite ovant men det gick snabbare att få till formerna och validera dom än om man skulle ha skrivit dom mera manuellt som vi gjort förut. Antar att man blir mer bekväm med det här upplägget ju mer man arbetar med dom.
		</p>
		<p>
			<b>Har du några tankar kring hur man sparar lösenord? </b><br />
			Var inte direkt några nyheter för mig med att lösenorden ska hachas och saltas innan dom sparas. Det som var nytt i mos upplägg var nog att han sparade ett unikt salt för varje användare i databasen. Jag har alltid haft saltet i en säkrad fil i PHP koden.
		</p>
		<p>
			<b>Hur känns det att jobba i ramverket när det byggs ut efter hand?</b><br />
			Tycker att det är lite rörigt att hoppa mellan att bygga på ramverkets kärna och själva applikationen som ska tillämpas med den, men överlag fungerar det väl ok. Antar att det är lite lättare att visa hur dom olika delarna av ramverket fungerar när man varvar dom med applikationen som ska tillämpa dom, men som sagt, det blir lite rörigt.
		</p>	
		<p>
			<b>Något som var extra utmanande med detta avsnitt av tutorialen? </b><br />
			Det tog ett tag att greppa hur CForm fungerade det var ganska mycket kod att gå igenom och fick gå tillbaka en del när jag gick igenom koden för applikationen för att se vad som egentligen hände. Utöver det var det nog inte så mycket som blev fel förutom diverse småsaker man blev sittande med ett tag, bland annat fick jag något skumt meddelande när jag skulle logga in på en användare efter att ha bytt lösenord till den, men det visade sig att det berodde på att algoritmen man hachade lösenordet med inte hade sparats i databasen, detta på grund av ett stavfel som var lite svårt att upptäcka på grund av det främmande felmeddelandet jag fick.
		</p>
		
	</article>
	
	<article>
		<h2>Kmom03: En gästbok i ditt MVC-ramverk </h2>
		<p>
			<b>Vilken uppfattning fick du om CodeIgniter? </b><br />
			Verkar vara ett bra ramverk med en tydlig struktur och har både välkommenterad kod samt en bra dokumentation där man kan läsa om hur ramverket är tänkt att användas samt vilka funktioner som finns inbyggda för att underlätta byggandet av egna applikationer.
		</p>
		<p>
			<b>Gjorde du extrauppgiften och byggde din egna gästbok i CodeIgniter, hur kändes det? </b><br />
			Vart lite lättare att hänga med än under gästboksbygget i Lydia(Drygia) eftersom vi mest fokuserade på att bygga själva gästboken i CodeIgniter medan vi byggde både på gästboken och ramverket i Lydia guiden, vilket var lite rörigt. Utöver det så fungerade dom båda gästböckerna nästan likadant så där var det inte så mycket skillnad annat än att vi använde oss av lite andra funktioner och sånt.</p>
		<p>
			<b>Har du grepp om MVC-strukturen? Vad tycker du så här långt? </b><br />
			Tycker mig förstå bra hur den fungerar är ju en litet annat sätt att strukturera upp sin applikation på än vad jag är van vid. Men jag ser en hel del fördelar med en tydligare indelning av applikationens kod, samt att klasserna till själva ramverket gör att det blir mindre kod att skriva när man skapar själva applikationerna vilket underlättar en del. Nackdelen är ju att man måste sätta sig in i varje nytt ramverk man ska använda sig av och det är ju en hel del saker som finns i dom som man måste lära sig.</p>
		<p>
			<b>Gjorde du extra-uppgiften om Lydias vy-hantering, några reflektioner? </b><br />
			Ser ut som ett bra sätt att gruppera dom olika delar av applikationerna för att göra det lätt att hitta det man söker.
		</p>
		<p>
			<b>Tittade du på extra-uppgiften om spam, några reflektioner? </b><br />
			Var ett rätt intressant sätt att skydda sig mot spam och verkar ha varit rätt effektivt också. Vanligtvis brukar man ju se diverse captcha på sidorna för att skydda sig mot spam men det här var ju betydligt vänligare mot användarna, dock faller det för botar som är lite smartare kodade.
		</p>
	</article>
	
	<article>
		<h2>Kmom02: Grunden till ett MVC-ramverk </h2>
		<p>
			Döpte mitt MVC-ramverk till Drygia. Har väl inte direkt någon anledning till namnvalet utan tog det föra jag kom att tänka på mer elller mindre.
		</p>
		<p>
			Har mer eller mindre följt guiden rakt av. 
			Har inte kommit i kontakt med ett MVC ramverk tidigare och hade heller ingen aning att det existerande, har väl dock sett några av dom här underliga länkarna förut på vissa webbplatser men aldrig direkt reflekterat över dom.
		</p>
		<p>
			Lydia överlag verkar ha en bra struktur som är rätt tydlig att förstå sig på. Gillar iden med att strukturera upp en webbsida på det här viset eftersom det blir lättare att hitta dom delar man vill ändra på dock är det ju rätt mycket att sätta sig in i som nybörjare, många filer och ett helt nytt sätt att tänka på som man måste lära sig.
		</p>
		<p>
			Har kollat lite på andra ramverk på nätet bland annat en video serie som någon på forumet föreslog <a href="http://www.youtube.com/watch?v=Aw28-krO7ZM">(Länk)</a></br>
			Tyckte den gav en bra grund att stå på för att komma igång med hela MVC tänket.
		</p>
	</article>
	
	<article>
		<h2>Kmom01: En boilerplate</h2>
		<p>
			<b>Hur tänkte du och gick tillväga när du gjorde din me-sida?</b><br />
			Tog mest en kopia av det vi gjorde i HTMLPHP kursen då den koden duger fint som ME sida. Ändrade dock en del i strukturen för att koden skulle bli snyggare och tydligare att läsa.
		</p>
		<p>
			<b>Vad tycker du om boilerplate-konceptet?</b>
			Det är ju ett bra sätt att snabbt kunna komma igång med ett nytt projekt. Är ju en hel del saker som ska skrivas och struktureras upp när man ska skapa en ny webbsida så att ha en grundstomme klar redan är ju givetvis positivt.
			HTML5 Boilerplate innehåller inte bara strukturen i form av mappar och liknande utan har en hel del tillägg som t.ex css filen som nollställer allt samt en hel del fix för att webbsidan ska visas så likt som möjligt i dom olika webbläsarna som finns.
			Och det är ju skönt att ha sådana saker fixade direkt när man ska påbörja ett nytt projekt och som nybörjare får man ju också en hel del saker fixade som man annars kanske inte hade tänkt på eller ens vetat om att det fanns.
		</p>
		<p>
			<b>Vilken utvecklingsmiljö använder du?</b>
			Sitter på Windows XP och använder mig utav WAMP, Filezilla samt Notepad++.
			Har dock installerat och testat lite med Putty nu eftersom det användes tillsammans med Git för att på ett lätt sätt kunna kopiera över filerna från github till driftservern. Så det lär väl bli en del Putty i den här kursen antar jag.
		</p>
	</article>
	
</div>
input;


//---------------------------------------------------
//Prints out this page.
echo $headInfo. $bannerInfo . $html . $footer;
?>