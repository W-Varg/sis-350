-- DROP DATABASE "db_postgresCV";

CREATE DATABASE "db_postgresCV"
  WITH OWNER = django_user
       ENCODING = 'UTF8'
       TABLESPACE = pg_default
       LC_COLLATE = 'Spanish_Bolivia.1252'
       LC_CTYPE = 'Spanish_Bolivia.1252'
       CONNECTION LIMIT = -1;
