CREATE TABLE products(
    id INT  NOT NULL PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    price FLOAT(32) NOT NULL,
    type INT NOT NULL,
    describtion TEXT(65535) NOT NULL);
