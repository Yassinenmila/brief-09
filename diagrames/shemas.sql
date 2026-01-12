create table users (
id serial primary key not null,
name varchar (100),
email varchar (150) unique,
passwd varchar (100),
roles varchar (50)
CHECK (roles IN ('admin', 'author', 'reader'))
        DEFAULT 'reader'
);

create table article (
id serial primary key not null,
titre varchar (100),
contenu text,
id_author int references users(id)
);

create table likes (
id_user int references users(id),
id_article int references article(id),
date_like TIMESTAMP default current_TIMESTAMP,
primary key (id_user,id_article)
);

create table comments (

id_user int references users(id),
id_article int references article(id),
comment text,
date_like TIMESTAMP default current_TIMESTAMP,
primary key (id_user,id_article)

);

create table categorie (

id serial primary key not null,
name varchar (100) unique

);

create table art_type(

id_article int references article(id),
id_categorie int references categorie(id),
primary key (id_article,id_categorie)
);




-- create table users (
-- id serial primary key not null,
-- name varchar (100),
-- email varchar (150) unique,
-- passwd varchar (100),
-- roles varchar (50)
-- CHECK (roles IN ('admin', 'author', 'reader'))
--         DEFAULT 'reader'
-- );

-- create table article (
-- id serial primary key not null,
-- titre varchar (100),
-- contenu text,
-- id_author int references users(id)

-- );
-- select * from article ;

-- create table likes (
-- id_user int references users(id),
-- id_article int references article(id),
-- date_like TIMESTAMP default current_TIMESTAMP,
-- primary key (id_user,id_article)
-- );

-- create table comments (

-- id_user int references users(id),
-- id_article int references article(id),
-- comment text,
-- date_like TIMESTAMP default current_TIMESTAMP,
-- primary key (id_user,id_article)

-- );

-- create table categorie (

-- id serial primary key not null,
-- name varchar (100) unique

-- );
-- select * from art_type ;
-- create table art_type(

-- id_article int references article(id),
-- id_categorie int references categorie(id),
-- primary key (id_article,id_categorie)
-- );
-- \d users;

-- select * from users;

-- SELECT 
--     a.id AS article_id,
--     a.titre,
--     a.contenu,
--     u.name AS auteur,
--     COUNT(DISTINCT l.id_user) AS total_likes,
--     COUNT(DISTINCT c.id_user) AS total_commentaires
-- FROM article a
-- INNER JOIN users u ON a.id_author = u.id
-- LEFT JOIN likes l ON a.id = l.id_article
-- LEFT JOIN comments c ON a.id = c.id_article
-- GROUP BY a.id, a.titre, a.contenu, u.name
-- ORDER BY a.id DESC;


-- SELECT 
--     a.id AS article_id,
--     a.titre,
--     a.contenu,
--     u.name AS auteur,
--     COUNT(DISTINCT l.id_user) AS total_likes,
--     COUNT(DISTINCT c.id_user) AS total_commentaires,
--     STRING_AGG(DISTINCT cat.name, ', ') AS categories
-- FROM article a
-- INNER JOIN users u ON a.id_author = u.id
-- LEFT JOIN likes l ON a.id = l.id_article
-- LEFT JOIN comments c ON a.id = c.id_article
-- LEFT JOIN art_type at ON a.id = at.id_article
-- LEFT JOIN categorie cat ON at.id_categorie = cat.id
-- GROUP BY a.id, a.titre, a.contenu, u.name
-- ORDER BY a.id DESC;

-- SELECT 
--     a.id AS article_id,
--     a.titre,
--     a.contenu,
--     COUNT(DISTINCT l.id_user) AS total_likes,
--     COUNT(DISTINCT c.id_user) AS total_comments
-- FROM article a
-- LEFT JOIN likes l ON a.id = l.id_article
-- LEFT JOIN comments c ON a.id = c.id_article
-- WHERE a.id_author = 1
-- GROUP BY a.id, a.titre, a.contenu
-- ORDER BY a.id DESC;


-- SELECT 
--             a.id AS article_id,
--             a.titre,
--             a.contenu,
--             a.create_at AS date,
--             COUNT(DISTINCT a.id) AS total_art,
--             COUNT(DISTINCT l.id_user) AS total_likes,
--             COUNT(DISTINCT c.id_user) AS total_comments
--             FROM article a
--             LEFT JOIN likes l ON a.id = l.id_article
--             LEFT JOIN comments c ON a.id = c.id_article
--             WHERE a.id_author = 1
--             GROUP BY a.id, a.titre, a.contenu
--             ORDER BY a.id DESC;

-- SELECT 
--     c.id,
--     c.contenu AS commentaire,
--     c.created_at,
--     u.name AS nom_utilisateur
-- FROM comments c
-- JOIN users u ON c.id_user = u.id
-- WHERE c.id_article = 1
-- ORDER BY c.created_at DESC;


