<?php
switch($_SERVER["REQUEST_METHOD"])
{ 
    case "GET":

    $val = $_GET["pov"];
    if($val == 1) 
    {
        $myfile = fopen("povesti.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("povesti.txt"));
        fclose($myfile);
       
    }
    else
    {
        echo "Poveste care trebuie stearsa!";
    }
    break;

    case "POST":
    $val = $_POST["pov"];
    if($val == 2)
    {
        echo "Legenda spune ca atunci cand a venit prima toamna pe lume toate pasarile s-au grabit sa plece spre tari mai calde. Una singura mai ramasese: o rândunică mică si zgribulita, pe o creanga de la marginea codrului. Avea, saracuta, o aripa rupta si nu putea sa zboare prea mult. S-a dus sa ceara ajutorul unui copac, caci acesta avand radacini, de buna seama ca nu va pleca nicaieri si va sti cum sa infrunte frigul si crivatul iernii. S-a dus mai intai la stejar, vazandu-l mai falnic:
         - Te rog frumos, lasa-ma sa traiesc printre ramurile tale, caci vine iarna si voi muri fara adapost!
         - Nu pot, i-a raspuns semet stejarul, nu vreau sa-mi mananci ghindele.Cauta-ti de drum!
         S-a dus, biata rândunică, si la un fag, dar nici acesta nu s-a indurat sa o gazduiasca:
         - Imi pare rau, i-a zis fagul ingrijorat de vantul ce se intetea. Am deja destule griji si iarna o sa fie grea. Nu pot sa te ajut.
         Si tot asa, de la un copac la altul... Biata rândunică nici nu stia incotro sa se mai indrepte, cand, trecand pe langa brad, auzi spre mirarea si bucuria ei:
         - Ei, rândunico, nu te mai framanta! Daca vrei, ramai la mine. Poti sta pe oricare dintre crengile mele si impreuna vom trece noi si peste iarna ce vine!
         Bucuroasa, pasarea isi facu degraba un culcus pe una dintre ramurile bradului. Si chiar din noaptea aceea vantul rece incepu sa sufle. Palide, una cate una, frunzele pomilor cadeau la pamant. Doar frunzele bradului ramaneau verzi, toti fiind uimiti de asa minune. Si vantul se mira nespus, asa ca s-a dus chiar inaintea Creatorului:
          - Doamne, lasa-ma sa scutur si frunzele bradului, asa cum fac cu toti copacii.
          - Nu, i-a raspuns Dumnezeu vantului.Bradului sa nu-i faci nimic, caci a fost bun cu biata rândunică. De el sa nu te atingi!
          Si de atunci, dragii mei, toti copacii isi pierd haina lor de frunze si flori, doar bradul isi pastreaza totdeauna frunzele verzi, fie vara, fie iarna.";
    }
    if($val == 100) {
        $myfile = fopen("povesti.txt", "w");
        fwrite($myfile, $_POST["val"]);
        fclose($myfile);
        echo 'scris';
    }
    break;

    case "PUT":

    $val = $_GET["pov"];
    if($val == 3)
    {
    echo "Povestea lui Moş Nicolae spune că, la vârsta adolescenţei, Nicolae a moştenit o avere foarte mare, însă nu ştia ce să facă cu ea. Fiind o persoană foarte milostivă, dorinţa lui cea mai mare a fost să îi ajute pe cei mai puţin norocoşi ca el, aşa că a încercat să transforme visurile acestora în realitate.
        Deşi Nicolae ştia foarte bine că locuitorii oraşului său au mare nevoie de ajutor, era conştient şi de faptul că aceştia sunt foarte mândri şi nu ar accepta în ruptul capului ajutorul său, aşa că s-a hotărât să-şi ajute prietenii în secret.
        În fiecare noapte, Nicolae se deghiza şi livra oamenilor din sat mâncare, haine şi bani. Dintre toţi cei pe care i-a ajutat, Nicolae s-a apropiat de o familie anume. În această familie foarte săracă, erau trei surori. Tatăl fetelor era foarte trist pentru că, din lipsa banilor, nu îşi permitea să îşi mărite toate trei fetele.
        Dorind din tot sufletul să ajute această familie, în apropierea nunţii fiicei celei mai mari, Nicolae a lăsat la uşa tatălui un săculeţ cu bănuţi de aur. Aşa cum era de aşteptat, familia a fost în culmea fericirii când a descoperit săculeţul la uşă.
        Când a venit vremea să se mărite cea de-a doua fiică, Nicolae a aruncat un săculeţ cu bănuţi de aur pe coşul casei în care locuia familia nevoiaşă. Toată lumea a fost extrem de bucuroasă şi cu toţii ar fi vrut să-i mulţumească persoanei care i-a ajutat atât de mult, însă nu aveau idee cine ar putea fi…
        Cum nunta celei de-a treia fiice se apropia, tatăl s-a hotărât să stea de pază, pentru a descoperi cine este îngerul lor păzitor, care i-a scos din necaz şi a adus atâta fericire în familia lor. De data aceasta, Nicolae a aruncat săculeţul cu bănuţi pe fereastra deschisă. Auzind săculeţul cu galbeni căzând pe podea, tatăl l-a urmărit pe Nicolae şi i-a ieşit în cale.
        Nicolae a fost foarte jenat şi l-a rugat pe tatăl fetelor să nu spună celorlalţi că el e persoana care îi ajută cu tot ce au nevoie. Tatăl a promis să păstreze secretul, însă a fost atât de impresionat de gestul lui Nicolae încât, oricât a încercat, nu şi-a respectat promisiunea şi a dezvăluit secretul. Aşa că, în scurt timp, toţi locuitorii oraşului ştiau că Nicolae e responsabil de toate minunile care s-au întâmplat în oraşul lor.
        Legenda lui Moş Nicolae spune că, de atunci, în fiecare an, în noaptea de 5 spre 6 decembrie, Nicolae îi recompensează pe toţi copiii care au fost cuminţi de-a lungul întregului an, lăsându-le în ghetuţe daruri. Nicolae este în continuare amintit pentru bunătatea, generozitatea și dragostea lui nemărginită pentru copii. În onoarea sa, în decembrie, de Sfântul Nicolae (6 decembrie), în multe țări din întreaga lume se oferă copiilor pungi cu cadouri.";
    }
    
    if($val == 4) {
        $myfile = fopen("povesti.txt", "w");
        fwrite($myfile, $_GET["val"]);
        fclose($myfile);
        echo 'scris';
    }
    break;
    case "DELETE":

    $val = $_GET["pov"];
    if($val == 5)
    {
        echo "Am sters povestea!";
    }
    break;
}
/*
Se spune că Moș Crăciun a existat demult și că era un bătrân care făcea jucării. Îi plăcea atât de mult acest lucru, încât le făcea pe tot parcursul anului, iar pe data de 25 decembrie el le vindea la un târg (le vindea foarte ieftin, pentru că oamenii nu erau prea înstăriți). Într-o zi, de Crăciun, pe drumul de întoarcere de la târg spre casă, bătrânul zărește la fereastră trei copii care nu primiseră nimic în acea zi specială.
        Bătrânul vede că acei copii sunt trişti şi doreşte să le ofere ceva; nu mai avea nicio jucărie la el, pentru că era prima dată când le vânduse pe toate. Şi-a dorit atât de mult să le dea o jucărie în dar şi aşa, printr-o minune, pe fundul sacului a apărut una. În felul acesta, le-a făcut o bucurie copiiilor. Atunci şi-a dorit să poată să facă jucării pentru toţi copiii, chiar şi pentru cei sărmani, care nu pot să-şi cumpere jucăriile mult visate. 
        În faţa lui a apărut o căprioară rănită. Bătrânul a bandajat-o, iar aceasta, în semn de mulţumire, a făcut să apară renii şi sania. Straiele vechi şi zdrenţuite ale bătrânului s-au schimbat în unele frumoase şi roşii. Aşa a apărut Moş Crăciun.
*/
?>