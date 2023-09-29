CREATE TABLE IF NOT EXISTS post
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    titre VARCHAR(500),
    commentaire TEXT,
    competence VARCHAR(255),
    niveau VARCHAR(255),
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO post (name,email,titre,commentaire,competence,niveau) VALUES
('jon doe','jjo@yahoo.uk','titre','commentaire fait par jjo','php,python','intermediaire'),
('jane doe','jjaaaaa@gamil.uk','titre de jane','blabla','python,html','debutant'),
('bla blo','blabla@free.fr','blatitrebla','jai la flemme','python','expert');