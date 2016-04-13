CREATE DATABASE sdf;
USE sdf;
CREATE TABLE statuses(
  id INT AUTO_INCREMENT NOT NULL,
  NAME VARCHAR(20) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE customer_type(
  id INT AUTO_INCREMENT NOT NULL,
  NAME VARCHAR(40) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE post(
  id INT AUTO_INCREMENT NOT NULL,
  NAME VARCHAR(40) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE specifications(
  id INT AUTO_INCREMENT NOT NULL,
  path VARCHAR(100) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE customer(
  id INT AUTO_INCREMENT NOT NULL,
  firstname VARCHAR(40) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  patronymic VARCHAR(40) NOT NULL,
  phone_nubmer INT,
  email VARCHAR(40),
  TYPE INT,
  PRIMARY KEY(id),
  FOREIGN KEY(TYPE) REFERENCES customer_type(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE orders(
  id INT AUTO_INCREMENT NOT NULL,
  customer INT,
  project_name VARCHAR(30),
  specifications INT,
  date_opened DATE,
  date_closed DATE,
  price FLOAT(2),
  deadline DATE,
  order_status INT,
  PRIMARY KEY(id),
  FOREIGN KEY(customer) REFERENCES customer(id),
  FOREIGN KEY(specifications) REFERENCES specifications(id),
  FOREIGN KEY(order_status) REFERENCES statuses(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE employees(
  id INT AUTO_INCREMENT NOT NULL,
  firstname VARCHAR(40) NOT NULL,
  surname VARCHAR(40) NOT NULL,
  secondname VARCHAR(40) NOT NULL,
  patronymic VARCHAR(40) NOT NULL,
  email VARCHAR(40) NOT NULL,
  post INT,
  date_hired DATE,
  date_fired DATE,
  PRIMARY KEY(id),
  FOREIGN KEY(post) REFERENCES post(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE task(
  id INT AUTO_INCREMENT NOT NULL,
  title VARCHAR(40),
  description TEXT,
  task_status INT,
  employee INT,
  date_opened DATE,
  date_closed DATE,
  deadline DATE,
  PRIMARY KEY(id),
  FOREIGN KEY(employee) REFERENCES employees(id),
  FOREIGN KEY(task_status) REFERENCES statuses(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE request(
  id INT AUTO_INCREMENT NOT NULL,
  title VARCHAR(40),
  description TEXT,
  customer INT,
  date_opened DATE,
  date_closed DATE,
  request_status INT,
  PRIMARY KEY(id),
  FOREIGN KEY(customer) REFERENCES customer(id),
  FOREIGN KEY(request_status) REFERENCES statuses(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE respons(
  id INT AUTO_INCREMENT NOT NULL,
  request INT,
  date_respons DATE,
  text_respons TEXT,
  employee INT,
  PRIMARY KEY(id),
  FOREIGN KEY(request) REFERENCES request(id),
  FOREIGN KEY(employee) REFERENCES employees(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE account_types(
  id INT AUTO_INCREMENT,
  NAME VARCHAR(20),
  PRIMARY KEY(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
CREATE TABLE users(
  id INT AUTO_INCREMENT,
  email VARCHAR(40),
  customer int,
  employee int,
  passwrd VARCHAR(40),
  account_type INT,
  PRIMARY KEY(id),
  FOREIGN KEY(account_type) REFERENCES account_types(id),
  FOREIGN KEY(customer) REFERENCES customer(id),
  FOREIGN KEY(employee) REFERENCES employees(id)
) ENGINE = InnoDB CHARACTER SET = UTF8;
