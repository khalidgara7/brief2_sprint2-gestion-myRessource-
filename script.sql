
-- creation de base de donnée :


-- pour utiliser la base de donnée en utilise la requete use name de base donnée :


-- la craetaion des tables 
-- creation de la table utilisateur :
create table utilisateur(user_id int PRIMARY key AUTO_INCREMENT,
                         nom VARCHAR (20),
                         prenom VARCHAR(20),
                         email VARCHAR(50));
-- creation de table des ressource :   

CREATE TABLE IF NOT EXISTS resources (
    resource_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES utilisateur(user_id) ON DELETE CASCADE);
    
-- creation de Table des Catégories :

CREATE TABLE IF NOT EXISTS categories (category_id INT PRIMARY KEY AUTO_INCREMENT,
                                       name VARCHAR(255) );
    
-- creation de Table des Sous-Catégories :

CREATE TABLE IF NOT EXISTS subcategories (
    subcategory_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(category_id));
