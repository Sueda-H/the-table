CREATE TABLE payment(
   Payment_Method VARCHAR(50) NOT NULL PRIMARY KEY
  ,Order_Count    INTEGER  NOT NULL
  ,Amount         VARCHAR(50) NOT NULL
);
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Apple Pay',21,'1.901,51');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Bancontact',24,'4.182,74');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('betaal achteraf Klarna',74,'8.462,37');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Creditcard',146,'20.635,14');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Directe bankoverschrijving',2,'198.00');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Fairbee',5,'344.95');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('iDEAL',1904,'170.866,58');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Klarna Achteraf betalen.',18,'1.092,51');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Klarna Pay Now',1,'440.05');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('other',4,'349.62');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('PayPal',93,'11.670,84');
INSERT INTO payment(Payment_Method,Order_Count,Amount) VALUES ('Stripe lessel',1,'38.58');
