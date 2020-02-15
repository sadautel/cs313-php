CREATE TABLE topic
( id              SERIAL        NOT NULL PRIMARY KEY
, name            VARCHAR(100)  NOT NULL);

INSERT INTO topic (name) VALUES ('Faith');
INSERT INTO topic (name) VALUES ('Sacrifice');
INSERT INTO topic (name) VALUES ('Charity');


CREATE TABLE scripture_topic
 (scriptureId int NOT NULL REFERENCES scripture(id)
  , topicId int NOT NULL REFERENCES topic(id));