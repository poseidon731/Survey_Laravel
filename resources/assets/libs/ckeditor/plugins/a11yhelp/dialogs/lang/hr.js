/*
 Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
CKEDITOR.plugins.setLang("a11yhelp", "hr", {
    title: "Upute dostupnosti",
    contents: "Sadržaj pomoći. Za zatvaranje pritisnite ESC.",
    legend: [{
            name: "Općenito",
            items: [{ name: "Alatna traka", legend: "Pritisni ${toolbarFocus} za navigaciju do alatne trake. Pomicanje do prethodne ili sljedeće alatne grupe vrši se pomoću SHIFT+TAB i TAB. Pomicanje do prethodnog ili sljedećeg gumba u alatnoj traci vrši se pomoću lijeve i desne strelice kursora. Pritisnite SPACE ili ENTER za aktivaciju alatne trake." }, {
                    name: "Dijalog",
                    legend: "Unutar dijaloga, pritisnite TAB kako bi navigirali do sljedećeg elementa dijaloga, pritisnite SHIFT+TAB kako bi se pomaknuli do prethodnog elementa, pritisnite ENTER kako bi poslali dijalog, pritisnite ESC za gašenje dijaloga. Kada dijalog ima više kartica, listi kartica se može pristupiti pomoću ALT+F10 ili sa TAB. Kada je fokusirana lista kartica, pomaknite se naprijed ili nazad pomoću strelica LIJEVO ili DESNO."
                }, { name: "Kontekstni izbornik", legend: "Pritisnite ${contextMenu} ili APPLICATION tipku za otvaranje kontekstnog izbornika. Pomicanje se vrši TAB ili strelicom kursora prema dolje ili SHIFT+TAB ili strelica kursora prema gore. SPACE ili ENTER odabiru opciju izbornika. Otvorite podizbornik trenutne opcije sa  SPACE, ENTER ili desna strelica kursora. Povratak na prethodni izbornik vrši se sa ESC ili lijevom strelicom kursora. Zatvaranje se vrši pritiskom na tipku ESC." },
                { name: "Lista", legend: "Unutar list-boxa, pomicanje na sljedeću stavku vrši se sa TAB ili strelica kursora prema dolje. Na prethodnu sa SHIFT+TAB ili strelica prema gore. Pritiskom na SPACE ili ENTER odabire se stavka ili ESC za zatvaranje." }, { name: "Traka putanje elemenata", legend: "Pritisnite ${elementsPathFocus} za navigaciju po putanji elemenata. Pritisnite TAB ili desnu strelicu kursora za pomicanje na sljedeći element ili SHIFT+TAB ili lijeva strelica kursora za pomicanje na prethodni element. Pritiskom na SPACE ili ENTER vrši se odabir elementa." }
            ]
        },
        {
            name: "Naredbe",
            items: [{ name: "Vrati naredbu", legend: "Pritisni ${undo}" }, { name: "Ponovi naredbu", legend: "Pritisni ${redo}" }, { name: "Bold naredba", legend: "Pritisni ${bold}" }, { name: "Italic naredba", legend: "Pritisni ${italic}" }, { name: "Underline naredba", legend: "Pritisni ${underline}" }, { name: "Link naredba", legend: "Pritisni ${link}" }, { name: "Smanji alatnu traku naredba", legend: "Pritisni ${toolbarCollapse}" }, { name: "Naredba za pristupi prethodnom prostoru fokusa", legend: "Pritisni ${accessPreviousSpace} za pristup najbližem nedostupnom razmaku prije kursora, npr.: dva spojena HR elementa. Ponovnim pritiskom dohvatiti će se sljedeći nedostupni razmak." },
                { name: "Naredba za pristup sljedećem prostoru fokusa", legend: "Pritisni ${accessNextSpace} za pristup najbližem nedostupnom razmaku nakon kursora, npr.: dva spojena HR elementa. Ponovnim pritiskom dohvatiti će se sljedeći nedostupni razmak." }, { name: "Pomoć za dostupnost", legend: "Pritisni ${a11yHelp}" }, { name: "Zalijepi kao čisti tekst", legend: "Pritisnite ${pastetext}", legendEdge: "Pritisnite ${pastetext}, zatim ${paste}" }
            ]
        }
    ],
    tab: "Tab",
    pause: "Pause",
    capslock: "Caps Lock",
    escape: "Escape",
    pageUp: "Page Up",
    pageDown: "Page Down",
    leftArrow: "Lijev strelica",
    upArrow: "Strelica gore",
    rightArrow: "Desna strelica",
    downArrow: "Strelica dolje",
    insert: "Insert",
    leftWindowKey: "Lijeva Windows tipka",
    rightWindowKey: "Desna Windows tipka",
    selectKey: "Tipka Select",
    numpad0: "Numpad 0",
    numpad1: "Numpad 1",
    numpad2: "Numpad 2",
    numpad3: "Numpad 3",
    numpad4: "Numpad 4",
    numpad5: "Numpad 5",
    numpad6: "Numpad 6",
    numpad7: "Numpad 7",
    numpad8: "umpad 8",
    numpad9: "Numpad 9",
    multiply: "Množenje",
    add: "Zbrajanje",
    subtract: "Oduzimanje",
    decimalPoint: "Decimalna točka",
    divide: "Dijeljenje",
    f1: "F1",
    f2: "F2",
    f3: "F3",
    f4: "F4",
    f5: "F5",
    f6: "F6",
    f7: "F7",
    f8: "F8",
    f9: "F9",
    f10: "F10",
    f11: "F11",
    f12: "F12",
    numLock: "Num Lock",
    scrollLock: "Scroll Lock",
    semiColon: "Točka zarez",
    equalSign: "Jednako",
    comma: "Zarez",
    dash: "Crtica",
    period: "Točka",
    forwardSlash: "Kosa crta",
    graveAccent: "Akcent",
    openBracket: "Otvorena uglata zagrada",
    backSlash: "Obrnuta kosa crta",
    closeBracket: "Zatvorena uglata zagrada",
    singleQuote: "Jednostruki navodnik"
});