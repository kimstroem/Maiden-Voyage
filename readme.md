Rapporter och undersökningar
====================

Rapportstruktur på Umbraco (.net)

**Radioresultat**

 Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll                         | 28                    | &nbsp;                                                     | &nbsp; | &nbsp;
&nbsp;                           | header                | Rapportnamn                                                | Tex SIFO Radiorapport II, 2009 | yes
&nbsp;                           | report1               | Bifoga Rapport                                             | Tillhörande PDF | &nbsp;
&nbsp;                           | bodyText              | Fakta om undersökningen                                    | Tex: Radiolyssnadet under perioden 19/1 - 29/3 2009 (10 veckor) för riket och 3/10 - 14/12, 19/1-29/3 2009 för lokala områden (19 veckor) | &nbsp;
&nbsp;                           | &nbsp;                | &nbsp;                                                     | &nbsp; | &nbsp;
Rapportsida                      | 29                    | &nbsp;                                                     | &nbsp; | &nbsp;
&nbsp;                           | period                | Period                                                     | Tex: Radiolyssnadet under perioden 19/1 - 29/3 2009 (10 veckor) för riket och 3/10 - 14/12, 19/1-29/3 2009 för lokala områden (19 veckor) | yes
&nbsp;                           | reachImage            | Bild, räckvidd i procent (HN-P)                            | &nbsp; | &nbsp;
&nbsp;                           | timeImage             | Bild, Genomsnittlig lyssnartid i minuter (GL)              | &nbsp; | &nbsp;
&nbsp;                           | listenerTimeImage     | Bild: Lyssnarnas genomsnittliga lyssnartid i minuter (LGL) | &nbsp; | &nbsp;
&nbsp;                           | marketShareImage      | Bild: Marknadsandel i procent (GL-M)                       | &nbsp; | &nbsp;
&nbsp;                           | &nbsp;                | &nbsp;                                                     | &nbsp; | &nbsp;
Radiolyssnandet via webb         | 30                    | &nbsp;                                                     | &nbsp; | &nbsp;
&nbsp;                           | bodyText1             | Radiolyssnandet via webb, text1                            | &nbsp; | &nbsp;
&nbsp;                           | webListeningWeekImage | Bild: Webbradiolyssnandet genomsnittlig vecka i procent    | &nbsp; | &nbsp;
&nbsp;                           | bodyText2             | Radiolyssnandet via webb, text2                            | &nbsp; | &nbsp;
&nbsp;                           | webListeningDayImage  | Bild: Webbradiolyssnandet genomsnittlig dygn i procent     | &nbsp; | &nbsp;
&nbsp;                           | &nbsp;                | &nbsp;                                                     | &nbsp; | &nbsp;
Webbradiolyssnandet i målgrupper | 31                    | &nbsp;                                                     | &nbsp; | &nbsp;
&nbsp;                           | daysImage             | Bild: Genomsnittlig dygn i procent                         | &nbsp; | &nbsp;
&nbsp;                           | weekPercentImage      | Bild: Genomsnittlig vecka i procent                        | &nbsp; | &nbsp;
&nbsp;                           | stationChanges        | Stationsförändringar                                       | &nbsp; | &nbsp;
&nbsp;                           | nextPublishDate       | Nästa rapport publiceras                                   | &nbsp; | &nbsp;
&nbsp;                           | &nbsp;                | &nbsp;                                                     | &nbsp; | &nbsp;
*None*                           | &nbsp;                | &nbsp;                                                     | &nbsp; | &nbsp;
&nbsp;                           | desiredDate           | Visat Datum| Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras. | &nbsp; 

**ORVESTO**

 Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll | 25                  | &nbsp;                                                        | &nbsp; | &nbsp;
&nbsp;   | totalReport         | Bifoga fil (totalrapport ink pressmeddelande, 1000-tal och %) | Tex ORVESTO Konsument 2009:1 (Total)      | &nbsp;
&nbsp;   | reachFile           | Bifoga fil för procent (%)                                    | Tex ORVESTO® Konsument 2009:1 Procent (%) | &nbsp;  
&nbsp;   | editionAndReachFile | Bifoga fil för uppräknade tal (1000-tal)                      | ORVESTO® Konsument 2009:1 Uppräknade tal  | &nbsp;
&nbsp;   | year                | Årtal                                                         | &nbsp; | yes
&nbsp;   | quarter             | Kvartal                                                       | &nbsp; | yes
&nbsp;   | header              | Namn på rapport                                               | T ex ORVESTO® Konsument 200X:X | yes
&nbsp;   | &nbsp;              | &nbsp;                                                        | &nbsp; | &nbsp;
*None*   | &nbsp;              | &nbsp;                                                        | &nbsp; | &nbsp;
&nbsp;   | desiredDate         | Visat Datum                                                   | Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras. | &nbsp;

**Paper**

 Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll | 23
&nbsp;   | header              | Namn på paper              | &nbsp; | yes
&nbsp;   | bodyText            | Beskrivning/sammanfattning | &nbsp; | yes
&nbsp;   | author              | Författare                 | &nbsp; | &nbsp;
&nbsp;   | paper               | Bifoga fil                 | &nbsp; | yes
&nbsp;   | complementingHeader | Kompletterande papernamn   | &nbsp; | &nbsp;
&nbsp;   | complementingPaper  | Kompletterande paperfil    | &nbsp; | &nbsp;
&nbsp;   | &nbsp;              | &nbsp;                     | &nbsp; | &nbsp;
*None*   | &nbsp;              | &nbsp;                     | &nbsp; | &nbsp;
&nbsp;   | desiredDate         | Visat Datum                | Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras. | &nbsp;

**Väljarbarometer**

Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll   | 27          | &nbsp;                          | &nbsp; | &nbsp;
&nbsp;     | header      | Namn på undersökning            | &nbsp; | yes
&nbsp;     | bodyText    | Beskrivning/sammanfattning      | &nbsp; | &nbsp;
&nbsp;     | report      | Bifoga fil                      | &nbsp; | &nbsp;
&nbsp;     | year        | År                              | &nbsp; | yes
&nbsp;     | &nbsp;      | &nbsp;                          | &nbsp; | &nbsp;
Importdata | 43          | &nbsp;                          | &nbsp; | &nbsp;
&nbsp;     | fileId      | FilId(gamla rapporter)          | &nbsp; | &nbsp;
&nbsp;     | publishedAt | Publicerat(från gamla systemet) | &nbsp; | &nbsp;
&nbsp;     | &nbsp;      | &nbsp;                          | &nbsp; | &nbsp;
*None*     | &nbsp;      | &nbsp;                          | &nbsp; | &nbsp;
&nbsp;     | desiredDate | Visat Datum                     | &nbsp; | &nbsp;

**Investigation**

Tab | machine_name | name | description | obligatory
---|---|---|---|---
Innehåll   | 40                 | &nbsp;                          | &nbsp; | &nbsp;
&nbsp;     | header             | Namn på undersökning            | &nbsp; | yes
&nbsp;     | projectNumber      | Projektnummer                   | &nbsp; | &nbsp;
&nbsp;     | assigner           | Uppdragsgivare                  | &nbsp; | &nbsp;
&nbsp;     | timeForFieldWork   | Tid för fältarbete              | &nbsp; | &nbsp;
&nbsp;     | numInterviews      | Antal gjorda intervjuer         | &nbsp; | &nbsp;
&nbsp;     | interviewed        | Intevjuade                      | &nbsp; | &nbsp;
&nbsp;     | InterviewMethod    | Intervjumetod                   | &nbsp; | &nbsp;
&nbsp;     | projectManager     | Projektledare                   | &nbsp; | &nbsp;
&nbsp;     | bodyText           | Text                            | Kort sammanfattning, visas tillsammans med ovanstående information. | &nbsp;
&nbsp;     | report1            | Bifoga rapport #1               | &nbsp; | yes
&nbsp;     | report2            | Bifoga rapport #2               | &nbsp; | &nbsp;
&nbsp;     | &nbsp;             | &nbsp;                          | &nbsp; | &nbsp;
Importdata | 42                 | &nbsp;                          | &nbsp; | &nbsp;
&nbsp;     | publishedAt        | Publicerat(från gamla systemet) | &nbsp; | &nbsp;
&nbsp;     | reportId1          | RapportId #1(gamla rapporter)   | &nbsp; | &nbsp;
&nbsp;     | reportId2          | RapportId #2(gamla rapporter)   | &nbsp; | &nbsp;
&nbsp;     | &nbsp;             | &nbsp;                          | &nbsp; | &nbsp;
*None*     | &nbsp;             | &nbsp;                          | &nbsp; | &nbsp;
&nbsp;     | desiredDate        | Visat datum                     | Datum som syns i samband med rapporten. OBS! Det är fältet "Publish At" ovan som bestämmer när det publiceras. | &nbsp;
&nbsp;     | demandRegistration | Kräv registrering               | &nbsp; | &nbsp;
