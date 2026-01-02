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
