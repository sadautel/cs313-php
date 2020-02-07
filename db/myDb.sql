CREATE TABLE client_info
( id         SERIAL       NOT NULL PRIMARY KEY
, first_name VARCHAR(50)  NOT NULL
, last_name  VARCHAR(50)  NOT NULL
, email      VARCHAR(100)  NOT NULL
, phone_number VARCHAR(100)  NOT NULL
);

CREATE TABLE business_owner_sign_in
( id         SERIAL       NOT NULL PRIMARY KEY
, first_name VARCHAR(50)  NOT NULL
, last_name  VARCHAR(50)  NOT NULL
, b_password VARCHAR(100)  NOT NULL
);

CREATE TABLE business_view
( client_id INT NOT NULL REFERENCES client(id)
, client_contact_id INT NOT NULL REFERENCES client_contact(id)
, client_check_in_id INT NOT NULL REFERENCES client_check_in(id)
);









