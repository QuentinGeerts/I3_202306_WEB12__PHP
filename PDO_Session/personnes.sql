DROP TABLE IF EXISTS person;
CREATE TABLE IF NOT EXISTS person (

    id INT AUTO_INCREMENT
    , lastname VARCHAR(100)
    , firstname VARCHAR(100)
    , birthdate DATE
    , email VARCHAR(150) NOT NULL
    , password VARCHAR(256)
    , role ENUM('admin', 'user') DEFAULT 'user'

    , created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
    , updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP


    , CONSTRAINT PK_person PRIMARY KEY (id)
    , CONSTRAINT UK_email UNIQUE (email)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO person 
VALUES (NULL, 'Geerts', 'Quentin', '1996-04-03', 'quentin.geerts@bstorm.be', sha2('Test123=', 256), 'admin', DEFAULT, DEFAULT)