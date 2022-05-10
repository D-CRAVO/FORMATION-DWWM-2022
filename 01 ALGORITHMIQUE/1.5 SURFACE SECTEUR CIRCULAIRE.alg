<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="aire EST_DU_TYPE NOMBRE" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param arrondiAuto="vrai" totalBoucles="5000000" totalAffichages="1000" epaisseurLigne="2" maxBoucle="500000" epaisseurPoint="2" nbDecimales="8"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#aire" algoitem="aire EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#rayon" algoitem="rayon EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#angle" algoitem="angle EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Veuillez saisir le rayon du cercle : #0" algoitem="AFFICHER &quot;Veuillez saisir le rayon du cercle : &quot;"/>
        <item code="2#rayon#pasliste" algoitem="LIRE rayon"/>
        <item code="4#Veuillez saisir l'angle : #0" algoitem="AFFICHER &quot;Veuillez saisir l'angle : &quot;"/>
        <item code="2#angle#pasliste" algoitem="LIRE angle"/>
        <item code="4#L'aire du secteur circulaire est : #0" algoitem="AFFICHER &quot;L'aire du secteur circulaire est : &quot;"/>
        <item code="5#aire#Math.PI*pow(rayon,2)*angle/360#pasliste" algoitem="aire PREND_LA_VALEUR Math.PI*pow(rayon,2)*angle/360"/>
        <item code="4#L'aire su secteur circulaire est : #0" algoitem="AFFICHER &quot;L'aire su secteur circulaire est : &quot;"/>
        <item code="3#aire#0#pasliste" algoitem="AFFICHER aire"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
