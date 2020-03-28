Drop table Utilisateur;
Drop table ticket;

Create table Utilisateur(
    idUtil VARCHAR(30) PRIMARY KEY,
    pass VARCHAR(150),
    droits VARCHAR(20),
    nom VARCHAR(30),
    prenom VARCHAR(30)
    )

Create table ticket(
    numTicket INTEGER AUTO_INCREMENT PRIMARY KEY ,
    idUtil VARCHAR(30) ,
    idAdmin VARCHAR(20) ,
    etat VARCHAR(150),
    message TEXT,
    reponse TEXT,
    dateOuverture DATETIME,
    datedetraitement DATETIME,
    dateFermeture DATETIME,
    FOREIGN KEY (idUtil) REFERENCES utilisateur(idUtil),
    FOREIGN KEY (idAdmin) REFERENCES utilisateur(idUtil)
    );
