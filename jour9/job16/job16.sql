SELECT 
    etages.nom_etage AS nom_etage,
    salles.nom AS "Biggest Room",
    salles.capacite
FROM 
    salles
JOIN 
    etages ON salles.id_etage = etages.id_etage
WHERE 
    salles.capacite = (
        SELECT MAX(capacite) FROM salles
    );
