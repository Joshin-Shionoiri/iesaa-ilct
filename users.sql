CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    school VARCHAR(255),
    grade VARCHAR(50),
    created_at DATETIME
);
