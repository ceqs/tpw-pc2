-- usuarios
select * from users;
insert into users(username, password, fullname, email) values('ceqs', '123456', 'Carlos Quispe', 'ceqs@hotmail.com');

-- notas
select * from notes;
insert into notes(username, title, text) values('ceqs', 'Nota 4', 'Esta es una prueba de la app 4');

update notes
set text = 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.'
where id = 3;

delete from notes
where id = 4;