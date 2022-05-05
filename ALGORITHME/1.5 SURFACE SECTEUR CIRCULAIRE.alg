<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot;L'aire su secteur circulaire est : &quot;" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2defaut="" F2lignes="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalBoucles="5000000" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" nbDecimales="8" epaisseurLigne="2" maxBoucle="500000"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="R EST_DU_TYPE NOMBRE" code="1#NOMBRE#R"/>
        <item algoitem="A EST_DU_TYPE NOMBRE" code="1#NOMBRE#A"/>
        <item algoitem="aire EST_DU_TYPE NOMBRE" code="1#NOMBRE#aire"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Veuillez saisir le rayon du cercle : &quot;" code="4#Veuillez saisir le rayon du cercle : #0"/>
        <item algoitem="LIRE R" code="2#R#pasliste"/>
        <item algoitem="AFFICHER &quot;Veuillez saisir l'angle : &quot;" code="4#Veuillez saisir l'angle : #0"/>
        <item algoitem="LIRE A" code="2#A#pasliste"/>
        <item algoitem="AFFICHER &quot;L'aire du secteur circulaire est : &quot;" code="4#L'aire du secteur circulaire est : #0"/>
        <item algoitem="aire PREND_LA_VALEUR Math.PI*pow(R,2)*A/360" code="5#aire#Math.PI*pow(R,2)*A/360#pasliste"/>
        <item algoitem="AFFICHER &quot;L'aire su secteur circulaire est : &quot;" code="4#L'aire su secteur circulaire est : #0"/>
        <item algoitem="AFFICHER aire" code="3#aire#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
