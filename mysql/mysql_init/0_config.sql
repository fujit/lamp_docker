USE mysql;

ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'pass';
ALTER USER 'test'@'%' IDENTIFIED WITH mysql_native_password BY 'test';