Rapporter och undersökningar
====================

Rapportstruktur på Umbraco (.net)

**Radioresultat**

 Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll | 28 | &nbsp; | &nbsp; | &nbsp;
||header| Rapportnamn | Tex SIFO Radiorapport II, 2009 | yes
||report1| Bifoga Rapport | Tillhörande PDF |
||bodyText| Fakta om undersökningen | Tex: Radiolyssnadet under perioden 19/1 - 29/3 2009 (10 veckor) för riket och 3/10 - 14/12, 19/1-29/3 2009 för lokala områden (19 veckor) |
|&nbsp;
Rapportsida|29|||
||period| Period | Tex: Radiolyssnadet under perioden 19/1 - 29/3 2009 (10 veckor) för riket och 3/10 - 14/12, 19/1-29/3 2009 för lokala områden (19 veckor) | true
||reachImage| Bild, räckvidd i procent (HN-P) | 
||timeImage|Bild, Genomsnittlig lyssnartid i minuter (GL)
||listenerTimeImage|Bild: Lyssnarnas genomsnittliga lyssnartid i minuter (LGL)
||marketShareImage|Bild: Marknadsandel i procent (GL-M)
|&nbsp;
Radiolyssnandet via webb|30
||bodyText1|Radiolyssnandet via webb, text1
||webListeningWeekImage|Bild: Webbradiolyssnandet genomsnittlig vecka i procent
||bodyText2|Radiolyssnandet via webb, text2
||webListeningDayImage|Bild: Webbradiolyssnandet genomsnittlig dygn i procent
|&nbsp;
Webbradiolyssnandet i målgrupper|31
||daysImage|Bild: Genomsnittlig dygn i procent
||weekPercentImage|Bild: Genomsnittlig vecka i procent
||stationChanges|Stationsförändringar
||nextPublishDate|Nästa rapport publiceras
|&nbsp;||||
| *None*
||desiredDate|Visat Datum| Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras. 

**ORVESTO**

 Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll | 25 |||
|| totalReport| Bifoga fil (totalrapport ink pressmeddelande, 1000-tal och %) | Tex ORVESTO Konsument 2009:1 (Total)
|| reachFile| Bifoga fil för procent (%) | Tex ORVESTO® Konsument 2009:1 Procent (%)  
|| editionAndReachFile| Bifoga fil för uppräknade tal (1000-tal) | ORVESTO® Konsument 2009:1 Uppräknade tal
|| year | Årtal || yes
|| quarter | Kvartal || yes
|| header | Namn på rapport | T ex ORVESTO® Konsument 200X:X | yes
|&nbsp;|
| *None*
|| desiredDate | Visat Datum | Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras.

**Paper**

 Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll | 23
|| header              | Namn på paper              || yes
|| bodyText            | Beskrivning/sammanfattning || yes
|| author              | Författare
|| paper               | Bifoga fil                 || yes
|| complementingHeader | Kompletterande papernamn
|| complementingPaper  | Kompletterande paperfil
|&nbsp;
| *None*
|| desiredDate         | Visat Datum | Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras.

**Väljarbarometer**

Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll | 27
|| header | Namn på undersökning || yes
|| bodyText | Beskrivning/sammanfattning
|| report | Bifoga fil
|| year | År || yes
|&nbsp;
Importdata | 43
|| fileId | FilId(gamla rapporter)
|| publishedAt | Publicerat(från gamla systemet)
|&nbsp;
| *None*
|| desiredDate | Visat Datum

**Investigation**

Tab | machine_name | name | description | obligatory
---|---|---|---|---
| Innehåll | 40
|| header | Namn på undersökning || yes
|| projectNumber | Projektnummer
|| assigner | Uppdragsgivare
|| timeForFieldWork | Tid för fältarbete
|| numInterviews | Antal gjorda intervjuer
|| interviewed | Intevjuade
|| InterviewMethod | Intervjumetod
|| projectManager | Projektledare
|| bodyText | Text | Kort sammanfattning, visas tillsammans med ovanstående information.
|| report1 | Bifoga rapport #1 || yes
|| report2 | Bifoga rapport #2
|&nbsp;
| Importdata | 42
|| publishedAt| Publicerat(från gamla systemet)
|| reportId1| RapportId #1(gamla rapporter)
|| reportId2| RapportId #2(gamla rapporter)
|&nbsp;
| *None*
|| desiredDate | Visat datum | Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras.
|| demandRegistration | Kräv registrering
