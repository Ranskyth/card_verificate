CREATE TABLE cartao(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    cvv VARCHAR(10),
    cartao VARCHAR(26),
    validade VARCHAR(10)
);

CREATE TABLE users(  
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255),
    senha VARCHAR(255)
);