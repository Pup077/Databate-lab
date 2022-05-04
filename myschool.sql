CREATE TABLE IF NOT EXISTS tbfaculty(
  facid       int(5)        NOT NULL AUTO_INCREMENT,
  facthname   varchar(100)  CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  facengname  varchar(100)  CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  unid        int(3)        NOT NULL,
  CONSTRAINT pk_faculty PRIMARY KEY (facid),
  CONSTRAINT fk_fac_univ FOREIGN KEY (unid) REFERENCES tbuniversity(unid) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE IF NOT EXISTS tbdepartment(
  depid       int(11)       NOT NULL AUTO_INCREMENT,
  depthname   varchar(100)  CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  depengname  varchar(100)  CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  facid       int(5)        NOT NULL,
  CONSTRAINT pk_department PRIMARY KEY (depid),
  CONSTRAINT fk_dep_fac    FOREIGN KEY (facid) REFERENCES tbfaculty(facid) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
