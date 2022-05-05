<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot;Le tri des nombres par ordre décroissant donne :&quot;" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2defaut="" F2etat="inactif" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param maxBoucle="500000" epaisseurLigne="2" totalBoucles="5000000" totalAffichages="1000" epaisseurPoint="2" arrondiAuto="vrai" nbDecimales="8"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#a" algoitem="a EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#b" algoitem="b EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#c" algoitem="c EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#d" algoitem="d EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#a#pasliste" algoitem="LIRE a"/>
        <item code="2#b#pasliste" algoitem="LIRE b"/>
        <item code="2#c#pasliste" algoitem="LIRE c"/>
        <item code="6#a&lt;b" algoitem="SI (a&lt;b) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#d#a#pasliste" algoitem="d PREND_LA_VALEUR a"/>
            <item code="5#a#b#pasliste" algoitem="a PREND_LA_VALEUR b"/>
            <item code="5#b#d#pasliste" algoitem="b PREND_LA_VALEUR d"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="6#a&lt;c" algoitem="SI (a&lt;c) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#d#c#pasliste" algoitem="d PREND_LA_VALEUR c"/>
            <item code="5#c#b#pasliste" algoitem="c PREND_LA_VALEUR b"/>
            <item code="5#b#a#pasliste" algoitem="b PREND_LA_VALEUR a"/>
            <item code="5#a#d#pasliste" algoitem="a PREND_LA_VALEUR d"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="4#Le tri des nombres par ordre décroissant donne :#1" algoitem="AFFICHER &quot;Le tri des nombres par ordre décroissant donne :&quot;"/>
        <item code="3#a#1#pasliste" algoitem="AFFICHER a"/>
        <item code="3#b#1#pasliste" algoitem="AFFICHER b"/>
        <item code="3#c#0#pasliste" algoitem="AFFICHER c"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
