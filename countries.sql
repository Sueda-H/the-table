CREATE DATABASE IF NOT EXISTS thetable 

CREATE TABLE landen(
   Billing_Country VARCHAR(50) NOT NULL PRIMARY KEY
  ,Order_Count     INTEGER  NOT NULL
  ,Amount          VARCHAR(50) NOT NULL
);
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('België',132,'7.973,87');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Duitsland',1612,'106.245,77');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Frankrijk',29,'0.00');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Italië',2,'0.00');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Luxemburg',2,'44.90');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Nederland',3217,'308.060,15');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Netherlands',4,'270.00');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Nieuw-Zeeland',1,'44.26');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Oostenrijk',47,'7.848,30');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Spanje',9,'55.20');
INSERT INTO landen(Billing_Country,Order_Count,Amount) VALUES ('Verenigd Koninkrijk (UK)',11,'74.53');
