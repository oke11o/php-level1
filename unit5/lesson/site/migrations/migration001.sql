
CREATE TABLE employee
(
  id_employee INT(11)      NOT NULL AUTO_INCREMENT,
  first_name  VARCHAR(255) NULL DEFAULT '',
  middle_name VARCHAR(255) NULL DEFAULT '',
  last_name   VARCHAR(255) NULL DEFAULT '',
  PRIMARY KEY (id_employee)
);