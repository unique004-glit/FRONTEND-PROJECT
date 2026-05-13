    CREATE TABLE student(
        id INT AUTO_INCREMENT PRIMARY KEY,
        student_id VARCHAR(225) NO NULL,
        name VARCHAR(300) NOT NULL,
        email VARCHAR(300) NOT NULL,
        phone VARCHAR(300) NOT NULL,
        create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );