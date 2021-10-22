create schema blog;

crete table posts (
   id serial primary key,
   title text not null, 
   content text not null, 
   date timestamp default now()
); 